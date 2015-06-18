<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Object-Modeling Technique (OMT) '); ?>
        <p>The <strong>Object-Modeling Technique (OMT)</strong> is an object modeling approach for software modeling and designing. It was developed around 1991 by Rumbaugh, Blaha, Premerlani, Eddy and Lorensen as a method to develop object-oriented systems and to support object-oriented programming. Describes Object model or static structure of the system.</p>
        <p>OMT was developed as an approach to software development. The purposes of modeling according to Rumbaugh are:</p>
        <ul>
            <li>testing physical entities before building them (simulation),</li>
            <li>communication with customers,</li>
            <li>visualisation (alternative presentation of information), and</li>
            <li>reduction of complexity.</li>
        </ul>

        <p>OMT has proposed three main types of models:</p>
        <p><strong>Object model:</strong> The object model represents the static and most stable phenomena in the modeled domain. Main concepts are classes and associations with attributes and operations. Aggregation and generalisation (with multiple inheritance) are predefined relationships.</p>
        <p><strong>Dynamic model:</strong> The dynamic model represents a state / transition view on the model. Main concepts are states, transitions between states, and events to trigger transitions. Actions can be modeled as occurring within states. Generalisation and aggregation (concur-rency) are predefined relationships.</p>
        <p><strong>Functional model:</strong> The functional model handles the process perspective of the model, corresponding roughly to data flow diagrams. Main concepts are process, data store, data flow, and actors.</p>

        <br />
        <p>OMT is a predecessor of the <?php echo $this->stencil->addLink('Unified Modeling Language', 'SD'); ?> (UML). Many OMT modeling elements are common to UML.</p>
    </div>
</div>