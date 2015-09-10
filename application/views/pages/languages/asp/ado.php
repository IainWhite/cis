<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('ADO - ActiveX Data Objects'); ?>
        <p></p>Microsoft's <strong>ActiveX Data Objects (ADO)</strong> comprises a set of <?php echo $this->stencil->addLink('Component Object Model', 'IT'); ?> (COM) objects for accessing data sources. A part of <strong>MDAC (Microsoft Data Access Components)</strong>, it provides a middleware layer between programming languages and <strong>OLE DB</strong> (a means of accessing data stores, whether databases or not, in a uniform manner). ADO allows a developer to write programs that access data without knowing how the database is implemented; developers must be aware of the database for connection only. No knowledge of [SQL] is required to access a database when using ADO, although one can use ADO to execute SQL commands directly (with the disadvantage of introducing a dependency upon the type of database used).</p>
        <p><?php echo $this->stencil->addLink('Microsoft', 'C'); ?> introduced ADO in October 1996, positioning the software as a successor to Microsoft's earlier object layers for accessing data sources, including <strong>RDO (Remote Data Objects)</strong> and <strong>DAO (Data Access Objects)</strong>.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>ADO Collections</h2>
            <h3>Fields</h3>
            <p>This collection contains a set of Field objects. The Collection can be used in either a <strong>Recordset</strong> object or in a Record object. In a Recordset object, each of the Field objects that make up the Fields collection corresponds to a column in that Record set object. In a Record object, a Field can be an absolute or relative URL that points into a tree-structured namespace (used for semi-structured data providers like the Microsoft OLE DB Provider for Internet Publishing) or as a reference to the default Stream object associated with that Record object.</p>
            <h3>Properties</h3>
            <p>An object can have more than one Property object, which are contained in the object's Properties collection.</p>
            <h3>Parameters</h3>
            <p>A Command object can have several Parameter commands to change its predefined behaviour, and each of the Parameter objects are contained in the Command object's Parameters collection</p>
            <h3>Errors</h3>
            <p>All provider-created errors are passed to a collection of Error objects, while the Errors collection itself is contained in a Connection object. When an ADO operation creates an error, the collection is cleared and a new group of Error objects is created in the collection.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>ADO Objects</h2>
            <h3>Connection</h3>
            <p>The connection object is ADO's connection to a data store via OLE DB. The connection object stores information about the session and provides methods of connecting to the data store. As some data stores have different methods of establishing a connection, some methods may not be supported in the connection object for particular OLE DB provider. A connection object connects to the data store using its 'Open' method with a connection string which specifies the connection as a list of key value pairs. The start of this connection string must identify the type of data store connection that the connection object requires:</p>
            <ul>
                <li>an OLE DB provider (for example SQLOLEDB), using the syntax "provider=";</li>
                <li>a file name, using the syntax "file name=";</li>
                <li>a remote provider and server using the syntax "Remote provider=" and "Remote server="; or</li>
                <li>an absolute URL, using the syntax "URL="</li>
            </ul>
            <h3>Command</h3>
            <p>After the connection object establishes a session to the data source, instructions are sent to the data provider via the command object. The command object can send SQL queries directly to the provider through the use of the CommandText property, send a parameterised query or stored procedure through the use of a Parameter object or Parameters collection or run a query and return the results to a dataset object via the Execute method. There are several other methods that can be used in the Command object relating to other objects, such as the Stream, RecordSet or Connection objects.</p>
            <h3>Recordset</h3>
            <p>A recordset is a group of records, and can either come from a base table or as the result of a query to the table. The RecordSet object contains a Fields collection and a Properties collection. The Fields collection is a set of Field objects, which are the corresponding columns in the table. The Properties collection is a set of Property objects, which defines a particular functionality of an OLE DB provider. The RecordSet has numerous methods and properties for examining the data that exists within it. Records can be updated in the recordset by changing the values in the record and then calling on the Update or UpdateBatch method.</p>
            <h3>Immediate</h3>
            <p>The recordset is locked using the adLockOptimistic or adLockPessimistic lock. The data are updated at the data source after the record is changed and the Update method is called.</p>
            <h3>Batch</h3>
            <p>The recordset is locked using adLockBatchOptimistic and each time Update is called the data are updated in a temporary buffer. Finally, when UpdateBatch is called the data are completely updated back at the data source. This has the advantage of it all being done in memory, and if a problem occurs then UpdateCancel is called and the updates are not sent to the data source</p>
            <h3>Transaction</h3>
            <p>If the OLE DB provider allows it, transactions can be used. To start the transaction, the programmer invokes the BeginTrans method and does the required updates. When they are all done, the programmer invokes the CommitTrans method. RollbackTrans can be invoked to cancel any changes made inside the transaction and rollback the database to the state before the transaction began</p>
            <h3>Record</h3>
            <p>This object represents one record in the database and contains a fields collection. A RecordSet consists of a collection of Record objects.</p>
            <h3>Stream</h3>
            <p>A stream, mainly used in a RecordSet object, is a means of reading and writing a stream of bytes. It is mostly used to save a recordset in an XML format, to send commands to an OLE DB provider as an alternative to the CommandText object and to contain the contents of a binary or text file.</p>
            <h3>Parameter</h3>
            <p>A parameter is a means of altering the behaviour of a common piece of functionality, for instance a stored procedure might have different parameters passed to it depending on what needs to be done; these are called parameterised commands.</p>
            <h3>Field</h3>
            <p>Each Record object contains many fields, and a RecordSet object has a corresponding Field object also. The RecordSet object's Field object corresponds to a column in the database table that it references.</p>
            <h3>Property</h3>
            <p>This object is specific to the OLE DB provider and defines an ability that the provider has implemented. A property object can be either a built-in property - it is a well-defined property implemented by ADO already and thus cannot be altered - or can be a dynamic property - defined by the underlying data provider and can be changed</p>
            <h3>Error</h3>
            <p>When an OLE DB provider error occurs during the use of ADO, an Error object will be created in the Errors collection. Other errors do not go into an Error object, however. For instance, any errors that occur when manipulating data in a RecordSet or Field object are stored in a Status property.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>ADO.NET</h2>
            <p><?php echo $this->stencil->addLink('ADO.NET', 'LA'); ?> has replaced ADO in the same way that C#/.NET replaced C/Win32 as the primary mode for targeting Windows application development. ADO.NET follows the same design pattern as ADO, enabling an ADO developer an easy path forward when moving to the <?php echo $this->stencil->addLink('.NET Framework', 'L'); ?>.</p>
        </div>
    </div>
<?php endif; ?>

