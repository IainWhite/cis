{literal}
&lt;widget&gt;
    &lt;debug&gt;on&lt;/debug&gt;
    &lt;window title="Sample Konfabulator Widget"&gt;
        &lt;name&gt;main_window&lt;/name&gt;
        &lt;width&gt;500&lt;/width&gt;
        &lt;height&gt;500&lt;/height&gt;
    &lt;/window&gt;
    &lt;image src="Images/Sun.png" name="sun1"&gt;
        &lt;hOffset&gt;250&lt;/hOffset&gt;
        &lt;vOffset&gt;250&lt;/vOffset&gt;
        &lt;alignment&gt;center&lt;/alignment&gt;
    &lt;/image&gt;
    &lt;text data="Click Here" size="36" style="bold"&gt;
        &lt;name&gt;text1&lt;/name&gt;
        &lt;hOffset&gt;250&lt;/hOffset&gt;
        &lt;vOffset&gt;100&lt;/vOffset&gt;
        &lt;alignment&gt;center&lt;/alignment&gt;
        &lt;onMouseUp&gt;
            sun1.opacity = (sun1.opacity / 100) * 90;
        &lt;/onMouseUp&gt;
    &lt;/text&gt;
&lt;/widget&gt;
{/literal}