<h1>Member Profile</h1>

<?php

echo '<p>Welcome ' . $this->userData->username . ' (id: ' . $this->userData->id . ')' . ' last login was ' . date('D, d F Y \a\t H:i:s', $this->userData->last_login) . "</p>\n";

echo '<p><strong>User:</strong> ' . $this->userData->first_name . ' ' .$this->userData->last_name . ' (' . $this->userData->email . ') was created on ' . date('d F Y', $this->userData->created_on)  . "</p>\n";

echo '<p><strong>Company:</strong> ' . $this->userData->company . ' <strong>Phone:</strong> ' . $this->userData->phone . ' <strong>IP:</strong> ' . $this->userData->ip_address  . "</p>\n";

?>


<h2>Menu</h2>
<ul>
    <li><a href="/logout"><i class="fa fa-sign-out color-red"></i> Logout</a></li>
    <?php echo '<li><a href="/members/edit_user/' . $this->userData->id .'"><i class="fa fa-pencil-square-o"></i> Edit</a></li>'; ?>
</ul>