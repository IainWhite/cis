<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Rx (Reactive Extensions)'); ?>
        <p>The <strong>Reactive Extensions</strong> (<strong>Rx</strong>) is a library for composing asynchronous and event-based programs using observable sequences and LINQ-style query operators. Using Rx, developers represent asynchronous data streams with Observables, query asynchronous data streams using LINQ operators, and parameterize the concurrency in the asynchronous data streams using Schedulers.</p>
        <p>Simply put, <strong>Rx = Observables + LINQ + Schedulers</strong>.</p>
        <p>Whether you are authoring a traditional desktop or web-based application, you have to deal with asynchronous and event-based programming from time to time. Desktop applications have I/O operations and computationally expensive tasks that might take a long time to complete and potentially block other active threads. Furthermore, handling exceptions, cancellation, and synchronization is difficult and error-prone.</p>
        <p>Using Rx, you can represent multiple asynchronous data streams, and subscribe to the event stream using the IObserver&lt;T&gt; interface. The IObservable&lt;T&gt; interface notifies the subscribed IObserver&lt;T&gt; interface whenever an event occurs.</p>
        <p>Because observable sequences are data streams, you can query them using standard LINQ query operators implemented by the Observable extension methods. Thus you can filter, project, aggregate, compose and perform time-based operations on multiple events easily by using these standard LINQ operators. In addition, there are a number of other reactive stream specific operators that allow powerful queries to be written.  Cancellation, exceptions, and synchronization are also handled gracefully by using the extension methods provided by Rx.</p>
        <p>Rx complements and interoperates smoothly with both synchronous data streams (IEnumerable&lt;T&gt;) and single-value asynchronous computations (Task&lt;T&gt;).</p>
     </div>
</div>
