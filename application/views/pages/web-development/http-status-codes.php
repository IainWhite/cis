<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('HTTP Status Codes'); ?>
        <p>The following is a list of Hypertext Transfer Protocol (HTTP) response status codes. This includes codes from <?php echo $this->stencil->addLink('IETF', 'C'); ?> internet standards as well as other IETF RFCs, other specifications and some additional commonly used codes. The first digit of the status code specifies one of five classes of response; the bare minimum for an <?php echo $this->stencil->addLink('HTTP', 'IPA'); ?> client is that it recognises these five classes. The phrases used are the standard examples, but any human readable alternative can be provided. Unless otherwise stated, the status code is part of the HTTP/1.1 standard (<?php echo $this->stencil->addRFCLink('7231'); ?>).</p>
        <p>The Internet Assigned Numbers Authority (<?php echo $this->stencil->addLink('IANA', 'C'); ?>) maintains the official registry of HTTP status codes.</p>
        <p><?php echo $this->stencil->addLink('Microsoft IIS', 'WS'); ?> sometimes uses additional decimal sub-codes to provide more specific information.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>1xx Informational</h2>
            <p>Request received, continuing process.</p>
            <p>This class of status code indicates a provisional response, consisting only of the Status Line and optional headers, and is terminated by an empty line. Since HTTP/1.0 did not define any 1xx status codes, servers must not send a 1xx response to an HTTP/1.0 client except under experimental conditions.</p>

            <h3>100 Continue</h3>
            <p>This means that the server has received the request headers, and that the client should proceed to send the request body (in the case of a request for which a body needs to be sent; for example, a POST request). If the request body is large, sending it to a server when a request has already been rejected based upon inappropriate headers is inefficient. To have a server check if the request could be accepted based on the request's headers alone, a client must send Expect: 100 continue as a header in its initial request and check if a 100 Continue status code is received in response before continuing (or receive 417 Expectation Failed and not continue).</p>
            <h3>101 Switching Protocols</h3>
            <p>This means the requester has asked the server to switch protocols and the server is acknowledging that it will do so.</p>
            <h3>102 Processing (WebDAV; <?php echo $this->stencil->addRFCLink('2518'); ?>)</h3>
            <p>As a <?php echo $this->stencil->addLink('WebDAV', 'WD'); ?> request may contain many sub-requests involving file operations, it may take a long time to complete the request. This code indicates that the server has received and is processing the request, but no response is available yet. This prevents the client from timing out and assuming the request was lost.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>2xx Success</h2>
            <p>This class of status codes indicates the action requested by the client was received, understood, accepted and processed successfully.</p>

            <h3>200 OK</h3>
            <p>Standard response for successful HTTP requests. The actual response will depend on the request method used. In a GET request, the response will contain an entity corresponding to the requested resource. In a POST request, the response will contain an entity describing or containing the result of the action.</p>
            <h3>201 Created</h3>
            <p>The request has been fulfilled and resulted in a new resource being created.</p>
            <h3>202 Accepted</h3>
            <p>The request has been accepted for processing, but the processing has not been completed. The request might or might not eventually be acted upon, as it might be disallowed when processing actually takes place.</p>
            <h3>203 Non-Authoritative Information (since HTTP/1.1)</h3>
            <p>The server successfully processed the request, but is returning information that may be from another source.</p>
            <h3>204 No Content</h3>
            <p>The server successfully processed the request, but is not returning any content. Usually used as a response to a successful delete request.</p>
            <h3>205 Reset Content</h3>
            <p>The server successfully processed the request, but is not returning any content. Unlike a 204 response, this response requires that the requester reset the document view.</p>
            <h3>206 Partial Content (<?php echo $this->stencil->addRFCLink('7233'); ?>)</h3>
            <p>The server is delivering only part of the resource (byte serving) due to a range header sent by the client. The range header is used by tools like <code>wget</code> to enable resuming of interrupted downloads, or split a download into multiple simultaneous streams.</p>
            <h3>207 Multi-Status (WebDAV; <?php echo $this->stencil->addRFCLink('4918'); ?>)</h3>
            <p>The message body that follows is an <?php echo $this->stencil->addLink('XML', 'WD'); ?> message and can contain a number of separate response codes, depending on how many sub-requests were made.</p>
            <h3>208 Already Reported (WebDAV; <?php echo $this->stencil->addRFCLink('5842'); ?>)</h3>
            <p>The members of a DAV binding have already been enumerated in a previous reply to this request, and are not being included again.</p>
            <h3>226 IM Used (<?php echo $this->stencil->addRFCLink('3229'); ?>)</h3>
            <p>The server has fulfilled a request for the resource, and the response is a representation of the result of one or more instance manipulations applied to the current instance.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h3>3xx Redirection</h3>
            <p>This class of status code indicates the client must take additional action to complete the request. Many of these status codes are used in <?php echo $this->stencil->addLink('URL', 'WD'); ?> redirection.</p>
            <p>A user agent may carry out the additional action with no user interaction only if the method used in the second request is GET or HEAD. A user agent should not automatically redirect a request more than five times, since such redirections usually indicate an infinite loop.</p>

            <h3>300 Multiple Choices</h3>
            <p>Indicates multiple options for the resource that the client may follow. It, for instance, could be used to present different format options for video, list files with different extensions, or word sense disambiguation.</p>
            <h3>301 Moved Permanently</h3>
            <p>This and all future requests should be directed to the given URI.</p>
            <h3>302 Found</h3>
            <p>This is an example of industry practice contradicting the standard. The HTTP/1.0 specification (<?php echo $this->stencil->addRFCLink('1945'); ?>) required the client to perform a temporary redirect (the original describing phrase was "Moved Temporarily"), but popular browsers implemented 302 with the functionality of a 303 See Other. Therefore, HTTP/1.1 added status codes 303 and 307 to distinguish between the two behaviours. However, some Web applications and frameworks use the 302 status code as if it were the 303.</p>
            <h3>303 See Other (since HTTP/1.1)</h3>
            <p>The response to the request can be found under another URI using a GET method. When received in response to a POST (or PUT / DELETE), it should be assumed that the server has received the data and the redirect should be issued with a separate GET message.</p>
            <h3>304 Not Modified (<?php echo $this->stencil->addRFCLink('7232'); ?>)</h3>
            <p>Indicates that the resource has not been modified since the version specified by the request headers If-Modified-Since or If-None-Match. This means that there is no need to retransmit the resource, since the client still has a previously downloaded copy.</p>
            <h3>305 Use Proxy (since HTTP/1.1)</h3>
            <p>The requested resource is only available through a proxy, whose address is provided in the response. Many HTTP clients (such as <?php echo $this->stencil->addLink('Mozilla', 'WB'); ?> and <?php echo $this->stencil->addLink('Internet Explorer', 'WB'); ?>) do not correctly handle responses with this status code, primarily for security reasons.</p>
            <h3>306 Switch Proxy</h3>
            <p>No longer used. Originally meant "Subsequent requests should use the specified proxy".</p>
            <h3>307 Temporary Redirect (since HTTP/1.1)</h3>
            <p>In this case, the request should be repeated with another URI; however, future requests should still use the original URI. In contrast to how 302 was historically implemented, the request method is not allowed to be changed when reissuing the original request. For instance, a POST request should be repeated using another POST request.</p>
            <h3>308 Permanent Redirect (<?php echo $this->stencil->addRFCLink('7538'); ?>)</h3>
            <p>The request, and all future requests should be repeated using another URI. 307 and 308 (as proposed) parallel the behaviours of 302 and 301, but do not allow the HTTP method to change. So, for example, submitting a form to a permanently redirected resource may continue smoothly.</p>
            <h3>308 Resume Incomplete (<?php echo $this->stencil->addLink('Google', 'C'); ?>)</h3>
            <p>This code is used in the Resumable HTTP Requests Proposal to resume aborted PUT or POST requests.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>4xx Client Error</h2>
            <p></p>The 4xx class of status code is intended for cases in which the client seems to have erred. Except when responding to a HEAD request, the server should include an entity containing an explanation of the error situation, and whether it is a temporary or permanent condition. These status codes are applicable to any request method. User agents should display any included entity to the user.</p>

            <h3>400 Bad Request</h3>
            <p>The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing).</p>
            <h3>401 Unauthorised (<?php echo $this->stencil->addRFCLink('7235'); ?>)</h3>
            <p>Similar to 403 Forbidden, but specifically for use when authentication is required and has failed or has not yet been provided. The response must include a WWW-Authenticate header field containing a challenge applicable to the requested resource. See Basic access authentication and Digest access authentication.</p>
            <h3>402 Payment Required</h3>
            <p>Reserved for future use. The original intention was that this code might be used as part of some form of digital cash or micropayment scheme, but that has not happened, and this code is not usually used. <?php echo $this->stencil->addLink('YouTube', 'URL'); ?> uses this status if a particular IP address has made excessive requests, and requires the person to enter a <?php echo $this->stencil->addLink('CAPTCHA', 'WB'); ?>.</p>
            <h3>403 Forbidden</h3>
            <p>The request was a valid request, but the server is refusing to respond to it. Unlike a 401 Unauthorised response, authenticating will make no difference.</p>
            <h3>404 Not Found</h3>
            <p>The requested resource could not be found but may be available again in the future. Subsequent requests by the client are permissible.</p>
            <h3>405 Method Not Allowed</h3>
            <p>A request was made of a resource using a request method not supported by that resource; for example, using GET on a form which requires data to be presented via POST, or using PUT on a read-only resource.</p>
            <h3>406 Not Acceptable</h3>
            <p>The requested resource is only capable of generating content not acceptable according to the Accept headers sent in the request.</p>
            <h3>407 Proxy Authentication Required (<?php echo $this->stencil->addRFCLink('7235'); ?>)</h3>
            <p>The client must first authenticate itself with the proxy.</p>
            <h3>408 Request Timeout</h3>
            <p>The server timed out waiting for the request. According to HTTP specifications: "The client did not produce a request within the time that the server was prepared to wait. The client MAY repeat the request without modifications at any later time".</p>
            <h3>409 Conflict</h3>
            <p>Indicates that the request could not be processed because of conflict in the request, such as an edit conflict in the case of multiple updates.</p>
            <h3>410 Gone</h3>
            <p>Indicates that the resource requested is no longer available and will not be available again. This should be used when a resource has been intentionally removed and the resource should be purged. Upon receiving a 410 status code, the client should not request the resource again in the future. Clients such as search engines should remove the resource from their indices. Most use cases do not require clients and search engines to purge the resource, and a "404 Not Found" may be used instead.</p>
            <h3>411 Length Required</h3>
            <p>The request did not specify the length of its content, which is required by the requested resource.</p>
            <h3>412 Precondition Failed (<?php echo $this->stencil->addRFCLink('7232'); ?>)</h3>
            <p>The server does not meet one of the preconditions that the requester put on the request.</p>
            <h3>413 Payload Too Large (<?php echo $this->stencil->addRFCLink('7231'); ?>)</h3>
            <p>The request is larger than the server is willing or able to process. Called "Request Entity Too Large " previously.</p>
            <h3>414 Request-URI Too Long</h3>
            <p>The URI provided was too long for the server to process. Often the result of too much data being encoded as a query string of a GET request, in which case it should be converted to a POST request.</p>
            <h3>415 Unsupported Media Type</h3>
            <p>The request entity has a media type which the server or resource does not support. For example, the client uploads an image as image/svg+xml, but the server requires that images use a different format.</p>
            <h3>416 Requested Range Not Satisfiable (<?php echo $this->stencil->addRFCLink('7233'); ?>)</h3>
            <p>The client has asked for a portion of the file (byte serving), but the server cannot supply that portion. For example, if the client asked for a part of the file that lies beyond the end of the file.</p>
            <h3>417 Expectation Failed</h3>
            <p>The server cannot meet the requirements of the Expect request header field.</p>
            <h3>418 I'm a teapot (<?php echo $this->stencil->addRFCLink('2324'); ?>)</h3>
            <p>This code was defined in 1998 as one of the traditional <?php echo $this->stencil->addLink('IETF', 'C'); ?> April Fools' jokes, in <?php echo $this->stencil->addRFCLink('2324'); ?>, Hyper Text Coffee Pot Control Protocol, and is not expected to be implemented by actual HTTP servers. The RFC specifies this code should be returned by tea pots requested to brew coffee.</p>
            <h3>419 Authentication Timeout (not in <?php echo $this->stencil->addRFCLink('2616'); ?>)</h3>
            <p>Not a part of the HTTP standard, 419 Authentication Timeout denotes that previously valid authentication has expired. It is used as an alternative to 401 Unauthorised in order to differentiate from otherwise authenticated clients being denied access to specific server resources.</p>
            <h3>420 Method Failure (Spring Framework)</h3>
            <p>Not part of the HTTP standard, but defined by Spring in the HttpStatus class to be used when a method failed. This status code is deprecated by Spring.</p>
            <h3>420 Enhance Your Calm (<?php echo $this->stencil->addLink('Twitter', 'URL'); ?>)</h3>
            <p>Not part of the HTTP standard, but returned by version 1 of the Twitter Search and Trends API when the client is being rate limited. Other services may wish to implement the 429 Too Many Requests response code instead.</p>
            <h3>421 Misdirected Request (HTTP/2)</h3>
            <p>The request was directed at a server that is not able to produce a response (for example because a connection reuse).</p>
            <h3>422 Unprocessable Entity (WebDAV; <?php echo $this->stencil->addRFCLink('4918'); ?>)</h3>
            <p>The request was well formed but was unable to be followed due to semantic errors.</p>
            <h3>423 Locked (WebDAV; <?php echo $this->stencil->addRFCLink('4918'); ?>)</h3>
            <p>The resource that is being accessed is locked.</p>
            <h3>424 Failed Dependency (WebDAV; <?php echo $this->stencil->addRFCLink('4918'); ?>)</h3>
            <p>The request failed due to failure of a previous request (e.g., a PROPPATCH).</p>
            <h3>426 Upgrade Required</h3>
            <p>The client should switch to a different protocol such as TLS/1.0, given in the Upgrade header field.</p>
            <h3>428 Precondition Required (<?php echo $this->stencil->addRFCLink('6585'); ?>)</h3>
            <p>The origin server requires the request to be conditional. Intended to prevent "the 'lost update' problem, where a client GETs a resource's state, modifies it, and PUTs it back to the server, when meanwhile a third party has modified the state on the server, leading to a conflict".</p>
            <h3>429 Too Many Requests (<?php echo $this->stencil->addRFCLink('6585'); ?>)</h3>
            <p>The user has sent too many requests in a given amount of time. Intended for use with rate limiting schemes.</p>
            <h3>431 Request Header Fields Too Large (<?php echo $this->stencil->addRFCLink('6585'); ?>)</h3>
            <p>The server is unwilling to process the request because either an individual header field, or all the header fields collectively, are too large.</p>
            <h3>440 Login Timeout (<?php echo $this->stencil->addLink('Microsoft', 'C'); ?>)</h3>
            <p>A Microsoft extension. Indicates that your session has expired.</p>
            <h3>444 No Response (<?php echo $this->stencil->addLink('Nginx', 'WS'); ?>)</h3>
            <p>Used in Nginx logs to indicate that the server has returned no information to the client and closed the connection (useful as a deterrent for malware).</p>
            <h3>449 Retry With (<?php echo $this->stencil->addLink('Microsoft', 'C'); ?>)</h3>
            <p>A Microsoft extension. The request should be retried after performing the appropriate action.</p>
            <h3>450 Blocked by Windows Parental Controls (<?php echo $this->stencil->addLink('Microsoft', 'C'); ?>)</h3>
            <p>A Microsoft extension. This error is given when Windows Parental Controls are turned on and are blocking access to the given webpage.</p>
            <h3>451 Unavailable For Legal Reasons (Internet draft)</h3>
            <p>Defined in the internet draft "A New HTTP Status Code for Legally restricted Resources". Intended to be used when resource access is denied for legal reasons, e.g. censorship or government mandated blocked access. A reference to the 1953 dystopian novel Fahrenheit 451, where books are outlawed.</p>
            <h3>451 Redirect (<?php echo $this->stencil->addLink('Microsoft', 'C'); ?>)</h3>
            <p>Used in Exchange ActiveSync if there either is a more efficient server to use or the server cannot access the users' mailbox.</p>
            <p>The client is supposed to re-run the HTTP Autodiscovery protocol to find a better suited server.</p>
            <h3>494 Request Header Too Large (<?php echo $this->stencil->addLink('Nginx', 'WS'); ?>)</h3>
            <p>Nginx internal code similar to 431 but it was introduced earlier in version 0.9.4 (on 21 January 2011).</p>
            <h3>495 Cert Error (<?php echo $this->stencil->addLink('Nginx', 'WS'); ?>)</h3>
            <p>Nginx internal code used when [SSL] client certificate error occurred to distinguish it from 4XX in a log and an error page redirection.</p>
            <h3>496 No Cert (<?php echo $this->stencil->addLink('Nginx', 'WS'); ?>)</h3>
            <p>Nginx internal code used when client didn't provide certificate to distinguish it from 4XX in a log and an error page redirection.</p>
            <h3>497 HTTP to HTTPS (<?php echo $this->stencil->addLink('Nginx', 'WS'); ?>)</h3>
            <p>Nginx internal code used for the plain HTTP requests that are sent to HTTPS port to distinguish it from 4XX in a log and an error page redirection.</p>
            <h3>498 Token expired/invalid (Esri)</h3>
            <p>Returned by ArcGIS for Server. A code of 498 indicates an expired or otherwise invalid token.</p>
            <h3>499 Client Closed Request (<?php echo $this->stencil->addLink('Nginx', 'WS'); ?>)</h3>
            <p>Used in Nginx logs to indicate when the connection has been closed by client while the server is still processing its request, making server unable to send a status code back.</p>
            <h3>499 Token required (Esri)</h3>
            <p>Returned by ArcGIS for Server. A code of 499 indicates that a token is required (if no token was submitted).</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>5xx Server Error</h2>
            <p>The server failed to fulfil an apparently valid request.</p>
            <p>Response status codes beginning with the digit "5" indicate cases in which the server is aware that it has encountered an error or is otherwise incapable of performing the request. Except when responding to a HEAD request, the server should include an entity containing an explanation of the error situation, and indicate whether it is a temporary or permanent condition. Likewise, user agents should display any included entity to the user. These response codes are applicable to any request method.</p>

            <h3>500 Internal Server Error</h3>
            <p>A generic error message, given when an unexpected condition was encountered and no more specific message is suitable.</p>
            <h3>501 Not Implemented</h3>
            <p>The server either does not recognise the request method, or it lacks the ability to fulfil the request. Usually this implies future availability.</p>
            <h3>502 Bad Gateway</h3>
            <p>The server was acting as a gateway or proxy and received an invalid response from the upstream server.</p>
            <h3>503 Service Unavailable</h3>
            <p>The server is currently unavailable (because it is overloaded or down for maintenance). Generally, this is a temporary state.</p>
            <h3>504 Gateway Timeout</h3>
            <p>The server was acting as a gateway or proxy and did not receive a timely response from the upstream server.</p>
            <h3>505 HTTP Version Not Supported</h3>
            <p>The server does not support the HTTP protocol version used in the request.</p>
            <h3>506 Variant Also Negotiates (<?php echo $this->stencil->addRFCLink('2295'); ?>)</h3>
            <p>Transparent content negotiation for the request results in a circular reference.</p>
            <h3>507 Insufficient Storage (WebDAV; <?php echo $this->stencil->addRFCLink('4918'); ?>)</h3>
            <p>The server is unable to store the representation needed to complete the request.</p>
            <h3>508 Loop Detected (WebDAV; <?php echo $this->stencil->addRFCLink('5842'); ?>)</h3>
            <p>The server detected an infinite loop while processing the request (sent in lieu of 208 Already Reported).</p>
            <h3>509 Bandwidth Limit Exceeded (<?php echo $this->stencil->addLink('Apache', 'WS'); ?> bw/limited extension)</h3>
            <p>This status code is not specified in any RFCs. Its use is unknown.</p>
            <h3>510 Not Extended (<?php echo $this->stencil->addRFCLink('2774'); ?>)</h3>
            <p>Further extensions to the request are required for the server to fulfil it.</p>
            <h3>511 Network Authentication Required (<?php echo $this->stencil->addRFCLink('6585'); ?>)</h3>
            <p>The client needs to authenticate to gain network access. Intended for use by intercepting proxies used to control access to the network (e.g., "captive portals" used to require agreement to Terms of Service before granting full Internet access via a <?php echo $this->stencil->addLink('Wi-Fi', 'ITN'); ?> hotspot).</p>
            <h3>520 Unknown Error</h3>
            <p>This status code is not specified in any RFC and is returned by certain services, for instance <?php echo $this->stencil->addLink('Microsoft Azure', 'IT'); ?> and <?php echo $this->stencil->addLink('CloudFlare', 'WD'); ?> servers: "The 520 error is essentially a “catch-all” response for when the origin server returns something unexpected or something that is not tolerated / interpreted (protocol violation or empty response)".</p>
            <h3>522 Origin Connection Time-out</h3>
            <p>This status code is not specified in any RFCs, but is used by <?php echo $this->stencil->addLink('CloudFlare', 'WD'); ?>'s reverse proxies to signal that a server connection timed out.</p>
            <h3>598 Network read timeout error (Unknown)</h3>
            <p>This status code is not specified in any RFCs, but is used by <?php echo $this->stencil->addLink('Microsoft', 'C'); ?> HTTP proxies to signal a network read timeout behind the proxy to a client in front of the proxy.</p>
            <h3>599 Network connect timeout error (Unknown)</h3>
            <p>This status code is not specified in any RFCs, but is used by <?php echo $this->stencil->addLink('Microsoft', 'C'); ?> HTTP proxies to signal a network connect timeout behind the proxy to a client in front of the proxy.</p>
        </div>
    </div>

<?php endif; ?>