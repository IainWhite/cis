<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Microsoft Script Debugger'); ?>
        <p><strong>Microsoft Script Debugger</strong> is relatively minimal debugger for Windows Script Host supported scripting languages, such as <?php echo $this->stencil->addLink('VBScript', 'L'); ?> and <?php echo $this->stencil->addLink('JScript', 'JS'); ?>.</p>
        <p>Its user interface allows the user to set breakpoints and/or step through execution of script code line by line, and examine values of variables and properties after any step.</p>
        <p>In effect, it provides a way for developers to see script code behaviour as it runs, thus eliminating much of the guess work when things don't quite work as intended.</p>
        <p><?php echo $this->stencil->addLink('Microsoft', 'C'); ?> considers it to be deprecated in favour of the more sophisticated <?php echo $this->stencil->addLink('Microsoft Script Editor', 'WD'); ?> (<code>MSE.EXE</code>), an optional tool included in <?php echo $this->stencil->addLink('Microsoft Office', 'ITS'); ?> 2000 through Office 2007.</p>
        <p>Also, <?php echo $this->stencil->addLink('Internet Explorer 8', 'IE'); ?> comes with a different, tightly integrated JScript debugger part of the Internet Explorer Developer Tools.</p>

        <h2>Features</h2>
        <p>According to Microsoft, the Script Debugger provides these traditional debugging features:</p>
        <ul>
            <li>Ability to set and clear breakpoints.</li>
            <li>Ability to step through and over procedures.</li>
            <li>Ability to display and change the values of variables and properties.</li>
            <li>Ability to evaluate expressions.</li>
            <li>Ability to view the call stack, and navigate to any currently loaded procedure.</li>
            <li>Additionally, it can open and edit HTML pages, and it supports script colourization for improved readability.</li>
        </ul>

        <h2>Limitations</h2>
        <p>The debugger has several limitations, including the following:</p>
        <ul>
            <li>The line indicator may be incorrect when stepping through in-line JScript or debugging a framed document.</li>
            <li>When debugging documents open in Internet Explorer, only one can be debugged at a time.</li>
            <li>Commands typed in the Command window have no effect unless the user is in break mode.</li>
            <li>A breakpoint immediately after a <code>Document.Write</code> is ignored.</li>
            <li>Entering a <code>Document.Write</code> command while debugging, or refreshing a document in Internet Explorer while debugging it, can cause hangs or other unexpected behaviour.</li>
            <li>Unlike in other debuggers, there is no Watch window for monitoring variables; they must be checked via manual commands.</li>
            <li>Unlike in other debuggers, breakpoints can't be set by clicking in the left margin; they must be set via keypress or menu.</li>
        </ul>
    </div>
</div>