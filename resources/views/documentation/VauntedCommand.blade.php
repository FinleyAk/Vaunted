@extends('layouts.base') @section ('title', 'VauntedCommand') @section('content') @include ('layouts.docs-nav')

<div class="container">

    <h1 class="page-title cyan-text text-lighten-1 center-align">Class: VauntedCommand</h1>

    <section>

        <header>

            <h2 class="cyan-text text-lighten-1"><span class="attribs"><span class="type-signature"></span></span>VauntedCommand<span class="signature">()</span><span class="type-signature"></span></h2>

        </header>

        <article>
            <div class="container-overview white-text">

                <h4 class="name cyan-text text-lighten-1" id="VauntedCommand"><span class="type-signature"></span>new VauntedCommand<span class="signature">()</span><span class="type-signature"></span></h4>

                <div class="description">
                    Creates a Vaunted Command
                </div>

            </div>

            <h3 class="subsection-title cyan-text text-lighten-1">Methods</h3>

            <h4 class="name white-text" id="embed"><span class="type-signature"></span>embed<span class="signature">(embedData)</span><span class="type-signature"> &rarr; {RichEmbed}</span></h4>

            <div class="description white-text">
                Creates the Vaunted Command Handler Client
            </div>

            <h5 class="white-text">Parameters:</h5>

            <table class="white-text">
                <thead class="white-text">
                    <tr>

                        <th>Name</th>

                        <th>Type</th>

                        <th class="last">Description</th>
                    </tr>
                </thead>

                <tbody class="white-text">

                    <tr>

                        <td class="name"><code>embedData</code></td>

                        <td class="type">

                            <span class="param-type">Object</span>

                        </td>

                        <td class="description last">The data for embed.
                            <h6>Properties</h6>

                            <table class="params white-text">
                                <thead>
                                    <tr>

                                        <th>Name</th>

                                        <th>Type</th>

                                        <th class="last">Description</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>

                                        <td class="name"><code>title</code></td>

                                        <td class="type">

                                            <span class="param-type">String</span>

                                        </td>

                                        <td class="description last">The title for the embed.</td>
                                    </tr>

                                    <tr>

                                        <td class="name"><code>color</code></td>

                                        <td class="type">

                                            <span class="param-type">ColorResolvable</span>

                                        </td>

                                        <td class="description last">The color of the embed.</td>
                                    </tr>

                                    <tr>

                                        <td class="name"><code>description</code></td>

                                        <td class="type">

                                            <span class="param-type">String</span>

                                        </td>

                                        <td class="description last">The description of the embed.</td>
                                    </tr>

                                    <tr>

                                        <td class="name"><code>footer</code></td>

                                        <td class="type">

                                            <span class="param-type">String</span>

                                        </td>

                                        <td class="description last">The footer of the embed.</td>
                                    </tr>

                                    <tr>

                                        <td class="name"><code>thumbnail</code></td>

                                        <td class="type">

                                            <span class="param-type">String</span>

                                        </td>

                                        <td class="description last">The thumbnail of the embed.</td>
                                    </tr>

                                    <tr>

                                        <td class="name"><code>image</code></td>

                                        <td class="type">

                                            <span class="param-type">String</span>

                                        </td>

                                        <td class="description last">The image of the embed.</td>
                                    </tr>

                                    <tr>

                                        <td class="name"><code>url</code></td>

                                        <td class="type">

                                            <span class="param-type">String</span>

                                        </td>

                                        <td class="description last">The url for the embed.</td>
                                    </tr>

                                    <tr>

                                        <td class="name"><code>author</code></td>

                                        <td class="type">

                                            <span class="param-type">Object</span>

                                        </td>

                                        <td class="description last">The author of the embed.
                                            <h6>Properties</h6>

                                            <table class="params">
                                                <thead>
                                                    <tr>

                                                        <th>Name</th>

                                                        <th>Type</th>

                                                        <th class="last">Description</th>
                                                    </tr>
                                                </thead>

                                                <tbody class="white-text">

                                                    <tr>

                                                        <td class="name"><code>name</code></td>

                                                        <td class="type">

                                                            <span class="param-type">Any</span>

                                                        </td>

                                                        <td class="description last">The authors name of the embed.</td>
                                                    </tr>

                                                    <tr>

                                                        <td class="name"><code>icon</code></td>

                                                        <td class="type">

                                                            <span class="param-type">String</span>

                                                        </td>

                                                        <td class="description last">The authors icon of the embed.</td>
                                                    </tr>

                                                    <tr>

                                                        <td class="name"><code>url</code></td>

                                                        <td class="type">

                                                            <span class="param-type">String</span>

                                                        </td>

                                                        <td class="description last">The authors url of the embed.</td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </td>
                    </tr>

                </tbody>
            </table>

            <h5 class="white-text">Returns:</h5>

            <div class="param-desc white-text">
                - The built embed.
            </div>

            <dl>
                <dt class="white-text">
        Type
    </dt>
                <dd>

                    <span class="param-type white-text">RichEmbed</span>

                </dd>
            </dl>

        </article>

    </section>

</div>

<footer class="white-text">
        Documentation generated by <a href="https://github.com/jsdoc/jsdoc">JSDoc 3.6.3</a> on Fri Oct 18 2019 18:03:23 GMT+0100 (British Summer Time)
    </footer>
@endsection
<style>
        code {
          font-family: monospace;
          background-color: #23272A;
        }
        </style>
