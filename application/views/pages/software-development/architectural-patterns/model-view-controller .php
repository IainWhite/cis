<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Model View Controller (MVC)'); ?>
        <p><strong>Model View Controller (MVC)</strong> is a software <?php echo $this->stencil->addLink('architectural pattern', 'SD'); ?> for implementing user interfaces.</p>
        <p>It divides a given software application into three interconnected parts, so as to separate internal representations of information from the ways that information is presented to or accepted from the user.</p>
        <p>The central component of MVC, the model, captures the behaviour of the application in terms of its problem domain, independent of the user interface. The model directly manages the data, logic and rules of the application. A view can be any output representation of information, such as a chart or a diagram; multiple views of the same information are possible, such as a bar chart for management and a tabular view for accountants. The third part, the controller, accepts input and converts it to commands for the model or view.</p>
        <p>In addition to dividing the application into three kinds of components, the model–view–controller design defines the interactions between them.</p>
        <p>A controller can send commands to the model to update the model's state (e.g., editing a document). It can also send commands to its associated view to change the view's presentation of the model (e.g., by scrolling through a document).</p>
        <p>A model stores data that is retrieved by the controller and displayed in the view. Whenever there is a change to the data it is updated by the controller.</p>
        <p>A view requests information from the model that it uses to generate an output representation to the user.</p>
        <p>MVC was one of the seminal insights in the early development of graphical user interfaces, and one of the first approaches to describe and implement software constructs in terms of their responsibilities.</p>
        <p><strong>Trygve Reenskaug</strong> introduced MVC into Smalltalk-76 while visiting <?php echo $this->stencil->addLink('Xerox Parc', 'C'); ?> in the 1970s. In the 1980s, Jim Althoff and others implemented a version of MVC for the Smalltalk-80 class library. It was only later, in a 1988 article in <strong>The Journal of Object Technology</strong>, that MVC was expressed as a general concept.</p>
        <p>The MVC pattern has subsequently evolved, giving rise to variants such as <?php echo $this->stencil->addLink('HMVC', 'MVC'); ?>, <?php echo $this->stencil->addLink('MVA', 'MVC'); ?>, <?php echo $this->stencil->addLink('MVP', 'MVC'); ?>, <?php echo $this->stencil->addLink('MVVM', 'MVC'); ?>, and others that adapted Model View Controller to different contexts.</p>
    </div>
</div>
