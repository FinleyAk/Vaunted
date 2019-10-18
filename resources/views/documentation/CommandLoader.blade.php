
@extends('layouts.base')
@section ('title', 'CommandLoader')
@section('content')
@include ('layouts.docs-nav')


<div id="main">

    <h1 class="page-title">Class: CommandLoader</h1>






<section>

<header>

        <h2><span class="attribs"><span class="type-signature"></span></span>CommandLoader<span class="signature">(client, options)</span><span class="type-signature"></span></h2>


</header>

<article>
    <div class="container-overview">






    <h4 class="name" id="CommandLoader"><span class="type-signature"></span>new CommandLoader<span class="signature">(client, options)</span><span class="type-signature"></span></h4>






<div class="description">
    Adds/Removes/Loads commands
</div>









    <h5>Parameters:</h5>


<table class="params">
    <thead>
    <tr>

        <th>Name</th>


        <th>Type</th>





        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>


        <tr>

                <td class="name"><code>client</code></td>


            <td class="type">


<span class="param-type">Client</span>



            </td>





            <td class="description last">Discord client.</td>
        </tr>



        <tr>

                <td class="name"><code>options</code></td>


            <td class="type">


<span class="param-type">Object</span>



            </td>





            <td class="description last">The command loader options.</td>
        </tr>


    </tbody>
</table>






<dl class="details">


























    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="handlers_CommandLoader.js.html">handlers/CommandLoader.js</a>, <a href="handlers_CommandLoader.js.html#line13">line 13</a>
    </li></ul></dd>







</dl>





















    </div>
















        <h3 class="subsection-title">Methods</h3>







    <h4 class="name" id="addCommand"><span class="type-signature"></span>addCommand<span class="signature">(name)</span><span class="type-signature"> &rarr; {Array}</span></h4>






<div class="description">
    Adds a command using the file name.
</div>









    <h5>Parameters:</h5>


<table class="params">
    <thead>
    <tr>

        <th>Name</th>


        <th>Type</th>





        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>


        <tr>

                <td class="name"><code>name</code></td>


            <td class="type">


<span class="param-type">String</span>



            </td>





            <td class="description last">The name of the file waiting to be loaded.</td>
        </tr>


    </tbody>
</table>






<dl class="details">


























    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="handlers_CommandLoader.js.html">handlers/CommandLoader.js</a>, <a href="handlers_CommandLoader.js.html#line69">line 69</a>
    </li></ul></dd>







</dl>















<h5>Returns:</h5>


<div class="param-desc">
    The loaded commands.
</div>



<dl>
    <dt>
        Type
    </dt>
    <dd>

<span class="param-type">Array</span>


    </dd>
</dl>













    <h4 class="name" id="getCommands"><span class="type-signature"></span>getCommands<span class="signature">()</span><span class="type-signature"> &rarr; {Array}</span></h4>






<div class="description">
    Get all the loaded commands.
</div>













<dl class="details">


























    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="handlers_CommandLoader.js.html">handlers/CommandLoader.js</a>, <a href="handlers_CommandLoader.js.html#line100">line 100</a>
    </li></ul></dd>







</dl>















<h5>Returns:</h5>


<div class="param-desc">
    All the loaded commands.
</div>



<dl>
    <dt>
        Type
    </dt>
    <dd>

<span class="param-type">Array</span>


    </dd>
</dl>













    <h4 class="name" id="loadAllCommands"><span class="type-signature"></span>loadAllCommands<span class="signature">()</span><span class="type-signature"> &rarr; {Array}</span></h4>






<div class="description">
    Loads all commands in the default or custom directory.
</div>













<dl class="details">


























    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="handlers_CommandLoader.js.html">handlers/CommandLoader.js</a>, <a href="handlers_CommandLoader.js.html#line55">line 55</a>
    </li></ul></dd>







</dl>















<h5>Returns:</h5>


<div class="param-desc">
    The loaded commands.
</div>



<dl>
    <dt>
        Type
    </dt>
    <dd>

<span class="param-type">Array</span>


    </dd>
</dl>













    <h4 class="name" id="loadCommand"><span class="type-signature"></span>loadCommand<span class="signature">(fileName)</span><span class="type-signature"> &rarr; {Array}</span></h4>






<div class="description">
    Loads a single command.
</div>









    <h5>Parameters:</h5>


<table class="params">
    <thead>
    <tr>

        <th>Name</th>


        <th>Type</th>





        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>


        <tr>

                <td class="name"><code>fileName</code></td>


            <td class="type">


<span class="param-type">String</span>



            </td>





            <td class="description last">The name of the file you would like to load.</td>
        </tr>


    </tbody>
</table>






<dl class="details">


























    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="handlers_CommandLoader.js.html">handlers/CommandLoader.js</a>, <a href="handlers_CommandLoader.js.html#line37">line 37</a>
    </li></ul></dd>







</dl>















<h5>Returns:</h5>


<div class="param-desc">
    All of the loaded commands.
</div>



<dl>
    <dt>
        Type
    </dt>
    <dd>

<span class="param-type">Array</span>


    </dd>
</dl>













    <h4 class="name" id="removeCommand"><span class="type-signature"></span>removeCommand<span class="signature">(command)</span><span class="type-signature"> &rarr; {Object|Boolean}</span></h4>






<div class="description">
    Removes a command.
</div>









    <h5>Parameters:</h5>


<table class="params">
    <thead>
    <tr>

        <th>Name</th>


        <th>Type</th>





        <th class="last">Description</th>
    </tr>
    </thead>

    <tbody>


        <tr>

                <td class="name"><code>command</code></td>


            <td class="type">


<span class="param-type">String</span>



            </td>





            <td class="description last">The file name of the command to be removed.</td>
        </tr>


    </tbody>
</table>






<dl class="details">


























    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="handlers_CommandLoader.js.html">handlers/CommandLoader.js</a>, <a href="handlers_CommandLoader.js.html#line78">line 78</a>
    </li></ul></dd>







</dl>















<h5>Returns:</h5>


<div class="param-desc">
    The removed command or false if failed.
</div>



<dl>
    <dt>
        Type
    </dt>
    <dd>

<span class="param-type">Object</span>
|

<span class="param-type">Boolean</span>


    </dd>
</dl>













    <h4 class="name" id="setCommands"><span class="type-signature"></span>setCommands<span class="signature">()</span><span class="type-signature"></span></h4>






<div class="description">
    Sets commands metadata
</div>













<dl class="details">


























    <dt class="tag-source">Source:</dt>
    <dd class="tag-source"><ul class="dummy"><li>
        <a href="handlers_CommandLoader.js.html">handlers/CommandLoader.js</a>, <a href="handlers_CommandLoader.js.html#line25">line 25</a>
    </li></ul></dd>







</dl>


























</article>

</section>




</div>

<nav>
    <h2><a href="index.html">Home</a></h2><h3>Classes</h3><ul><li><a href="CommandLoader.html">CommandLoader</a></li><li><a href="Vaunted.html">Vaunted</a></li><li><a href="VauntedCommand.html">VauntedCommand</a></li></ul><h3>Global</h3><ul><li><a href="global.html#Convert">Convert</a></li></ul>
</nav>

<br class="clear">

<footer>
    Documentation generated by <a href="https://github.com/jsdoc/jsdoc">JSDoc 3.6.3</a> on Fri Oct 18 2019 20:44:24 GMT+0100 (British Summer Time)
</footer>

<script> prettyPrint(); </script>
<script src="scripts/linenumber.js"> </script>
@endsection
