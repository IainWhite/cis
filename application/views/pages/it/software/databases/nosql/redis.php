<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Redis'); ?>
        <p><strong>Redis</strong> is an open-source, networked, in-memory, key-value data store with optional durability. It is written in <?php echo $this->stencil->addLink('C', 'L'); ?>.</p>
        <p>In its outer layer, the Redis data model is a dictionary which maps keys to values. One of the main differences between Redis and other structured storage systems is that Redis supports not only strings, but also abstract data types:</p>
        <ul>
            <li>Lists of strings</li>
            <li>Sets of strings (collections of non-repeating unsorted elements)</li>
            <li>Sorted sets of strings (collections of non-repeating elements ordered by a floating-point number called score)</li>
            <li>Hashes where keys and values are strings</li>
        </ul>
        <p>The type of a value determines what operations (called commands) are available for the value itself. Redis supports high level atomic server side operations like intersection, union, and difference between sets and sorting of lists, sets and sorted sets.</p>
    </div>
</div>