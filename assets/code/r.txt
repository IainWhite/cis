{literal}
# Base Year:    {{base_year}}
# Base Quarter: {{base_quarter}}
# Num Rows:     {{rows}}
# Num periods: 	{{cols}}
X <- matrix(scan(\"{{file_name}}_X.txt\", n = {{rows}}*{{cols}}), {{rows}}, {{cols}}, byrow = TRUE)
Y <- matrix(scan(\"{{file_name}}_Y.txt\", n = {{rows}}*1), {{rows}}, 1, byrow = TRUE)
Z <- sign(X);
## ESTIMATION
beta <-  solve(t(Z) %*% X) %*% t(Z) %*% Y    ##Coefficient Estimaton
##Sales Index
index <- 1/beta*100;
est_Y <- X %*% beta ##Estimated Base Period Value
resid <- Y-est_Y  ##Calculate Residuals
n= nrow(Y); ##Number of Sample
k= ncol(X);  ##Number of Periodn
n_Sales_X = colSums(abs(Z)); ##total number of Sales in each period
n_Sales_Y = colSums(abs(sign(Y))); ##total number of Sales in base period
avg_n_Sales = (sum(n_Sales_X)+sum(n_Sales_Y))/(k);
s_sq <- (t(resid) %*% resid)/ (n-k); ## Estimated Variance
X_sigma <- solve(t(Z) %*% X) %*% t(Z) %*% Z %*% solve(t(X) %*% Z); ## Estimated Variance-covariance matrix
est_cov <- diag(X_sigma)* s_sq;
est_st <- sqrt(est_cov); ##Estimated standard derviation
##t-ratio
t_ratio <- beta/est_st;

##95% Confidence Interval in beta
df=n-k; ##degree of freedom
CI_beta_upper <- beta + qt(0.975,df)*est_st;
CI_beta_lower <- beta + qt(0.025,df)*est_st;
## Difference on the Boundary (beta)
diff_bound <-  (CI_beta_upper - CI_beta_lower)/2;
## Error in beta and sales index (in percentage)
error_index <- diff_bound / beta *100;

##Calculate the confidential interval for the index
upper_index_CI <- index * (1 + error_index/100);
lower_index_CI <- index * (1 - error_index/100);
## Calculate the monthly change in index
change = diff(index);
change_per = diff(index)/index[-k]*100; ## Percentage change in monthly/quaterly index
change_per = c(0,change_per);  ##Make it equal length with index, in order to write into the file
##Checking the last two index estimate
n_Sales_period = n_Sales_X; ## Avoid changing the matrix: n_Sales_X
if (n_Sales_X[k-1] < avg_n_Sales/3 | n_Sales_X[k-1] < 35) {
        index <- index[c(-(k-1),-k)];
        n_Sales_period <- n_Sales_period[c(-(k-1),-k)];
        t_ratio <- t_ratio[c(-(k-1),-k)];
        change_per <- change_per[c(-(k-1),-k)];
        upper_index_CI <- upper_index_CI[c(-(k-1),-k)];
        lower_index_CI <- lower_index_CI[c(-(k-1),-k)];
} else if (n_Sales_X[k] < avg_n_Sales/3 | n_Sales_X[k] < 35) {
        index <- index[-k];
        n_Sales_period <- n_Sales_period[-k];
        t_ratio <- t_ratio[-k];
        change_per <- change_per[-k];
        upper_index_CI <- upper_index_CI[-k];
        lower_index_CI <- lower_index_CI[-k];
}

##Calculating the average of the first Sales Price
sales1_X <- matrix(0,n,k);
sales1_X <- ifelse(X<0,-X,0); ## If the number is negative, cancelled the sign. If the number is positive remove it. Because it indicates second sales.
n_Sales1_X = colSums(sign(sales1_X)); ##Number of 1st Sales in X each period
## total_Sales1_X = sum(n_Sales1_X); ## Total Number of 1st sales in X
## sales2_X <- matrix(0,n,k);
## sales2_X <- ifelse(X>0,X,0);
## n_Sales2_X = colSums(sign(sales2_X));
##  total_Sales2_X = sum(n_Sales2_X);

X_0 <- t(beta) %*% t(sales1_X); ##Calculate back into the base period
sales1 <- t(Y)+X_0; ## Combine 2 matrices
median_sales <- median(sales1); ##median
avg_sales = sum(sales1)/n;

index_period=length(index);
avg_n_Sales[2:index_period] = 0;
avg_sales[2:index_period] = 0;
median_sales[2:index_period] = 0;
result=list(index_per=index, upper_CI=upper_index_CI, lower_CI=lower_index_CI, monthly_change=change_per,avg_Sales1=avg_sales, median=median_sales, diagnotic=n_Sales_period, t_ratio=t_ratio, avg_n_Sales=avg_n_Sales);
write.csv(result, file=\"repeat_index.csv\"
{/literal}