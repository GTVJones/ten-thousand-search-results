<section class="row row-tabbed-content">
    <div class="col ends-at-one-third clr box" id="search-filters">
        <h2 class="inline">Filter results</h2>

        <ul class="available-filters" role="tablist" aria-multiselectable="true">
            <li id="heldby">
                <h3><a href="#" class="filter-toggler expanded" id="held-by-filters" role="tab">Held by</a></h3>

                <div class="filter-togglee" aria-labelledby="held-by-filters" role="tabpanel" aria-hidden="false"
                     style="">
                    <ul>
                        <li><a href="/results/r?_q=First%20World%20War&amp;search=r&amp;_hb=tna">The National
                                Archives</a> <span class="filterNumber">(6,062,038)</span></li>
                        <li class="download-only-filter"><a
                                href="/results/r?_q=First%20World%20War&amp;search=r&amp;_hb=tna&amp;_col=200">Available
                                for download only</a> <span class="filterNumber">(5,737,835)</span></li>
                        <li><a href="/results/r?_q=First%20World%20War&amp;search=r&amp;_hb=oth">Other archives</a>
                            <span class="filterNumber">(10,069)</span></li>
                    </ul>
                </div>
            </li>

            <li id="dates">
                <form action="/results/r" method="get"><input name="_q" type="hidden" value="First World War"><input
                        name="search" type="hidden" value="r">

                    <h3><a href="#" class="filter-toggler expanded" id="date-filters" role="tab">Date</a></h3>

                    <div class="filter-togglee" aria-labelledby="date-filters" role="tabpanel" aria-hidden="false"
                         style="">
                        <ul>
                            <li>
                                <input type="checkbox" name="_p" value="0" id="0">
                                <label for="0">
                                    Dates unknown
                                    <span class="filterNumber">(4,857)</span>
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" name="_p" value="1950" id="1950">
                                <label for="1950">
                                    1950+
                                    <span class="filterNumber">(8,240)</span>
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" name="_p" value="1925" id="1925">
                                <label for="1925">
                                    1925 - 1949
                                    <span class="filterNumber">(209,011)</span>
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" name="_p" value="1900" id="1900">
                                <label for="1900">
                                    1900 - 1924
                                    <span class="filterNumber">(6,060,529)</span>
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" name="_p" value="1800" id="1800">
                                <label for="1800">
                                    1800 - 1899
                                    <span class="filterNumber">(9,161)</span>
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" name="_p" value="1700" id="1700">
                                <label for="1700">
                                    1700 - 1799
                                    <span class="filterNumber">(224)</span>
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" name="_p" value="1600" id="1600">
                                <label for="1600">
                                    1600 - 1699
                                    <span class="filterNumber">(118)</span>
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" name="_p" value="1500" id="1500">
                                <label for="1500">
                                    1500 - 1599
                                    <span class="filterNumber">(63)</span>
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" name="_p" value="1400" id="1400">
                                <label for="1400">
                                    1400 - 1499
                                    <span class="filterNumber">(28)</span>
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" name="_p" value="1300" id="1300">
                                <label for="1300">
                                    1300 - 1399
                                    <span class="filterNumber">(17)</span>
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" name="_p" value="1200" id="1200">
                                <label for="1200">
                                    1200 - 1299
                                    <span class="filterNumber">(12)</span>
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" name="_p" value="1100" id="1100">
                                <label for="1100">
                                    1100 - 1199
                                    <span class="filterNumber">(5)</span>
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" name="_p" value="1000" id="1000">
                                <label for="1000">
                                    1000 - 1099
                                    <span class="filterNumber">(1)</span>
                                </label>
                            </li>
                        </ul>
                        <input name="Refine dates" value="Refine" type="submit" alt="Refine dates" title="Refine dates">
                    </div>
                </form>
            </li>


        </ul>

    </div>

    <div class="col ends-at-two-thirds clr box" id="search-results">
        <div class="breather">
            <section class="row">
                <div class="col starts-at-full clr box generic-tabs">
                    <ul id="generic-tabs">
                        <li class="selected tab" id="records-tab"><span>Records 6,072,107</span></li>
                        <li class="tab" id="name-authorities-tab"><a
                                href="/results/c?_q=First%20World%20War&amp;_col=500" id="nameAuthorities">Record
                                creators 7</a></li>
                    </ul>
                                <span class="tab-description records">
                                    Descriptions of records and information about how to access them
                                </span>
                </div>
            </section>


            <ul id="search-control-panel">
                <li>1 - 15 of {{ data.numberOfResults | number }} <span class="not-at-smaller">results</span></li>
                <li id="sort-form">
                    <form action="/results/r" method="get">
                        <fieldset>
                            <span class="not-at-smaller"> Sorted</span> by:
                            <select disabled="disabled" name="_srt">
                                <option value="0">Relevance</option>
                                <option value="1">Reference</option>
                                <option value="5">Title - ascending</option>
                                <option value="6">Title - descending</option>
                                <option value="3">Date - ascending</option>
                                <option value="4">Date - descending</option>
                            </select>
                            <input name="_q" type="hidden" value="First World War"><input name="search" type="hidden"
                                                                                          value="r">
                            <input class="discoverySecondaryCallToActionLink" type="submit" value="Sort" id="sort"
                                   title="Sort search results">
                        </fieldset>
                    </form>
                </li>
                <li id="simple-view"><a href="/results/r?_q=First%20World%20War&amp;search=r&amp;_rv=simple">Simple
                        view</a></li>
                <li id="printable-view">
                    <a onclick="dcsMultiTrack('DCS.dcsuri','/Searchresults/Print','WT.ti','Search Results: Print','WT.cg_n','Utilities','WT.dl','0', 'WT.oss','', 'WT.oss_r','', 'WT.osspageno','', 'WT.ossview','', 'DCSext.searchtype','');"
                       href="javascript:window.print()" title="print">Print</a>
                </li>
                <li><a id="show-download-form" href="#" class="toggle-export"><input ng-model="data.formVisibility" id="export-toggle" form="export-results" type="checkbox"/><label for="export-toggle">Export results</label></a></li>
            </ul>
            <span class="emphasis-block"><span>Sorting is only enabled when there are fewer than 10,000 results. Refine the search to reduce the number of results to enable sorting.</span></span>

            <div id="export" class="emphasis-block" ng-show="data.formVisibility">

                <form action="/search/download" method="post" id="export-results">
                    <fieldset>
                        <legend>Export and download results</legend>

                        <p>You can download up to the first {{ data.maxDownloadable | number }} results from your result set. This represents {{ proportionOfResults() | number:2 }} percent of the current result set</p>

                        <input checked="checked" id="CSV" name="dType" type="radio" value="CSV">
                        <label for="CSV">
                            as spreadsheet (CSV)
                        </label>

                        <input id="HTML" name="dType" type="radio" value="HTML">
                        <label for="HTML">
                            as web page (HTML)
                        </label>

                        <input id="XML" name="dType" type="radio" value="XML">
                        <label for="XML">
                            as XML file (XML)
                        </label>
                        <input type="submit" value="Download" class="discoveryDownloadLink">
                        <input name="_q" type="hidden" value="First World War"><input name="search" type="hidden"
                                                                                      value="r">
                    </fieldset>
                </form>
                <label for="export-toggle" class="toggle-export" id="close-export">Close</label>
            </div>
            <ul id="search-results">
                <li>
                    <a href="/details/rd/ecfc4e36-2a89-4638-9108-b911497af78d">

                        <h3><span class="highlight">First</span> <span class="highlight">World</span> <span
                                class="highlight">War</span></h3>

                        <p>Urban District of Lees. <span class="highlight">War</span>-time Measures. <span
                                class="highlight">First</span> <span class="highlight">World</span> <span
                                class="highlight">War</span></p>

                        <table>
                            <tbody>
                            <tr>
                                <td class="item-desc-label">
                                    Held by:
                                </td>
                                <td>
                                    Oldham Local Studies &amp; Archives
                                </td>
                            </tr>

                            <tr>
                                <td class="item-desc-label">
                                    Date:
                                </td>
                                <td>
                                <span class="itemContent">
                                        Dates unknown
                                </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-desc-label">
                                    Reference:
                                </td>
                                <td>
                                    <span class="itemContent">B-UDL/7/1</span>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </a>
                </li>
                <li>
                    <a href="/details/rd/5a794492-913d-477b-9e0f-551576f45b9d">

                        <h3><span class="highlight">First</span> <span class="highlight">World</span> <span
                                class="highlight">War</span></h3>

                        <p>Gandy family papers. EDWIN GANDY AND CAROLINE (CARRIE) nee GAMBLE. <span class="highlight">WAR</span>.
                            <span class="highlight">First</span> <span class="highlight">World</span> <span
                                class="highlight">War</span></p>

                        <table>
                            <tbody>
                            <tr>
                                <td class="item-desc-label">
                                    Held by:
                                </td>
                                <td>
                                    Nottinghamshire Archives
                                </td>
                            </tr>

                            <tr>
                                <td class="item-desc-label">
                                    Date:
                                </td>
                                <td>
                                <span class="itemContent">
                                        Dates unknown
                                </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-desc-label">
                                    Reference:
                                </td>
                                <td>
                                    <span class="itemContent">None stated</span>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </a>
                </li>
                <li>
                    <a href="/details/rd/a4e6df34-eeb5-47ce-a43c-0c20b6aaf506">

                        <h3><span class="highlight">First</span> <span class="highlight">World</span> <span
                                class="highlight">War</span> - General</h3>

                        <p>LEICESTERSHIRE REGIMENT RECORDS, 18-20th c. <span class="highlight">First</span> <span
                                class="highlight">World</span> <span class="highlight">War</span> - General</p>

                        <table>
                            <tbody>
                            <tr>
                                <td class="item-desc-label">
                                    Held by:
                                </td>
                                <td>
                                    Leicestershire, Leicester and Rutland, Record Office for
                                </td>
                            </tr>

                            <tr>
                                <td class="item-desc-label">
                                    Date:
                                </td>
                                <td>
                                <span class="itemContent">
                                        Dates unknown
                                </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-desc-label">
                                    Reference:
                                </td>
                                <td>
                                    <span class="itemContent">None stated</span>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </a>
                </li>
                <li>
                    <a href="/details/rd/1c5ccae3-2d49-471b-bbd4-da686503e3db">

                        <h3><span class="highlight">FIRST</span> <span class="highlight">WORLD</span> <span
                                class="highlight">WAR</span></h3>

                        <p>General Sir Archibald Murray GCB GCMG CVO DSO. <span class="highlight">FIRST</span> <span
                                class="highlight">WORLD</span> <span class="highlight">WAR</span></p>

                        <table>
                            <tbody>
                            <tr>
                                <td class="item-desc-label">
                                    Held by:
                                </td>
                                <td>
                                    Imperial War Museum Department of Documents
                                </td>
                            </tr>

                            <tr>
                                <td class="item-desc-label">
                                    Date:
                                </td>
                                <td>
                                <span class="itemContent">
                                        Dates unknown
                                </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-desc-label">
                                    Reference:
                                </td>
                                <td>
                                    <span class="itemContent">AJM/2</span>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </a>
                </li>
                <li>
                    <a href="/details/rd/3013e5c9-5966-41d1-b73b-0b5b47656b93">

                        <h3><span class="highlight">First</span> <span class="highlight">World</span> <span
                                class="highlight">War</span> Material</h3>

                        <p>Brigadier General A M Henley CMG DSO. <span class="highlight">First</span> <span
                                class="highlight">World</span> <span class="highlight">War</span> Material</p>

                        <table>
                            <tbody>
                            <tr>
                                <td class="item-desc-label">
                                    Held by:
                                </td>
                                <td>
                                    Imperial War Museum Department of Documents
                                </td>
                            </tr>

                            <tr>
                                <td class="item-desc-label">
                                    Date:
                                </td>
                                <td>
                                <span class="itemContent">
                                        1914 - 1918
                                </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-desc-label">
                                    Reference:
                                </td>
                                <td>
                                    <span class="itemContent">AMH/2</span>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </a>
                </li>
                <li>
                    <a href="/details/rd/37cd65e1-89bb-4a33-add4-b0b47ffbc447">

                        <h3><span class="highlight">First</span> <span class="highlight">World</span> <span
                                class="highlight">War</span> Letters</h3>

                        <p>MAURICE, Maj Gen Sir Frederick Barton(1871-1951) and MAURICE, Maj Gen Sir (John) Frederick
                            (1841-1912).... FREDERICK BARTON MAURICE PAPERS. F.B. Maurice: Letters to his wife. <span
                                class="highlight">First</span> <span class="highlight">World</span> <span
                                class="highlight">War</span> Letters. <span class="highlight">First</span> <span
                                class="highlight">World</span> <span class="highlight">War</span> Letters</p>

                        <table>
                            <tbody>
                            <tr>
                                <td class="item-desc-label">
                                    Held by:
                                </td>
                                <td>
                                    King's College London: Liddell Hart Centre for Military Archives
                                </td>
                            </tr>

                            <tr>
                                <td class="item-desc-label">
                                    Date:
                                </td>
                                <td>
                                <span class="itemContent">
                                        Dates unknown
                                </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-desc-label">
                                    Reference:
                                </td>
                                <td>
                                    <span class="itemContent">MAURICE/3/1/4/11-20</span>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </a>
                </li>
                <li>
                    <a href="/details/rd/0b4ceb7f-ecfc-4ec5-b318-d896507a468d">

                        <h3><span class="highlight">First</span> <span class="highlight">World</span> <span
                                class="highlight">War</span> Letters</h3>

                        <p>MAURICE, Maj Gen Sir Frederick Barton(1871-1951) and MAURICE, Maj Gen Sir (John) Frederick
                            (1841-1912).... FREDERICK BARTON MAURICE PAPERS. F.B. Maurice: Letters to his wife. <span
                                class="highlight">First</span> <span class="highlight">World</span> <span
                                class="highlight">War</span> Letters. <span class="highlight">First</span> <span
                                class="highlight">World</span> <span class="highlight">War</span> Letters</p>

                        <table>
                            <tbody>
                            <tr>
                                <td class="item-desc-label">
                                    Held by:
                                </td>
                                <td>
                                    King's College London: Liddell Hart Centre for Military Archives
                                </td>
                            </tr>

                            <tr>
                                <td class="item-desc-label">
                                    Date:
                                </td>
                                <td>
                                <span class="itemContent">
                                        1915
                                </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-desc-label">
                                    Reference:
                                </td>
                                <td>
                                    <span class="itemContent">MAURICE/3/1/4/59-80</span>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </a>
                </li>
                <li>
                    <a href="/details/rd/a4f11256-ba9b-4d54-aa05-89257a9c41f2">

                        <h3><span class="highlight">First</span> <span class="highlight">World</span> <span
                                class="highlight">War</span> Letters</h3>

                        <p>MAURICE, Maj Gen Sir Frederick Barton(1871-1951) and MAURICE, Maj Gen Sir (John) Frederick
                            (1841-1912).... FREDERICK BARTON MAURICE PAPERS. F.B. Maurice: Letters to his wife. <span
                                class="highlight">First</span> <span class="highlight">World</span> <span
                                class="highlight">War</span> Letters. <span class="highlight">First</span> <span
                                class="highlight">World</span> <span class="highlight">War</span> Letters</p>

                        <table>
                            <tbody>
                            <tr>
                                <td class="item-desc-label">
                                    Held by:
                                </td>
                                <td>
                                    King's College London: Liddell Hart Centre for Military Archives
                                </td>
                            </tr>

                            <tr>
                                <td class="item-desc-label">
                                    Date:
                                </td>
                                <td>
                                <span class="itemContent">
                                        Dates unknown
                                </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-desc-label">
                                    Reference:
                                </td>
                                <td>
                                    <span class="itemContent">MAURICE/3/1/4/176-202</span>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </a>
                </li>
                <li>
                    <a href="/details/rd/3ec0280f-b071-45c7-bc05-2cfa156be4da">

                        <h3><span class="highlight">First</span> <span class="highlight">World</span> <span
                                class="highlight">War</span> Letters</h3>

                        <p>MAURICE, Maj Gen Sir Frederick Barton(1871-1951) and MAURICE, Maj Gen Sir (John) Frederick
                            (1841-1912).... FREDERICK BARTON MAURICE PAPERS. F.B. Maurice: Letters to his wife. <span
                                class="highlight">First</span> <span class="highlight">World</span> <span
                                class="highlight">War</span> Letters. <span class="highlight">First</span> <span
                                class="highlight">World</span> <span class="highlight">War</span> Letters</p>

                        <table>
                            <tbody>
                            <tr>
                                <td class="item-desc-label">
                                    Held by:
                                </td>
                                <td>
                                    King's College London: Liddell Hart Centre for Military Archives
                                </td>
                            </tr>

                            <tr>
                                <td class="item-desc-label">
                                    Date:
                                </td>
                                <td>
                                <span class="itemContent">
                                        Dates unknown
                                </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-desc-label">
                                    Reference:
                                </td>
                                <td>
                                    <span class="itemContent">MAURICE/3/1/4/224-233</span>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </a>
                </li>
                <li>
                    <a href="/details/rd/08f7fd25-3bee-4a2a-88ee-3c26e82511ce">

                        <h3><span class="highlight">First</span> <span class="highlight">World</span> <span
                                class="highlight">War</span> Letters</h3>

                        <p>MAURICE, Maj Gen Sir Frederick Barton(1871-1951) and MAURICE, Maj Gen Sir (John) Frederick
                            (1841-1912).... FREDERICK BARTON MAURICE PAPERS. F.B. Maurice: Letters to his wife. <span
                                class="highlight">First</span> <span class="highlight">World</span> <span
                                class="highlight">War</span> Letters. <span class="highlight">First</span> <span
                                class="highlight">World</span> <span class="highlight">War</span> Letters</p>

                        <table>
                            <tbody>
                            <tr>
                                <td class="item-desc-label">
                                    Held by:
                                </td>
                                <td>
                                    King's College London: Liddell Hart Centre for Military Archives
                                </td>
                            </tr>

                            <tr>
                                <td class="item-desc-label">
                                    Date:
                                </td>
                                <td>
                                <span class="itemContent">
                                        1917
                                </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-desc-label">
                                    Reference:
                                </td>
                                <td>
                                    <span class="itemContent">MAURICE/3/1/4/273-274</span>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </a>
                </li>
                <li>
                    <a href="/details/rd/ae559ceb-874a-488a-90f0-32eee10f8c56">

                        <h3><span class="highlight">First</span> <span class="highlight">World</span> <span
                                class="highlight">War</span></h3>

                        <p>Papers of Margery Irene Corbett Ashby. National. <span class="highlight">First</span> <span
                                class="highlight">World</span> <span class="highlight">War</span></p>

                        <table>
                            <tbody>
                            <tr>
                                <td class="item-desc-label">
                                    Held by:
                                </td>
                                <td>
                                    London University: London School of Economics, The Women's Library
                                </td>
                            </tr>

                            <tr>
                                <td class="item-desc-label">
                                    Date:
                                </td>
                                <td>
                                <span class="itemContent">
                                        1914 - 1918
                                </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-desc-label">
                                    Reference:
                                </td>
                                <td>
                                    <span class="itemContent">7MCA/B/02</span>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </a>
                </li>
                <li>
                    <a href="/details/rd/cc60a227-ada6-49ee-88f7-56994bdab3d8">

                        <h3><span class="highlight">First</span> <span class="highlight">World</span> <span
                                class="highlight">War</span></h3>

                        <p>Kenn Parish. MILITIA. <span class="highlight">First</span> <span
                                class="highlight">World</span> <span class="highlight">War</span></p>

                        <table>
                            <tbody>
                            <tr>
                                <td class="item-desc-label">
                                    Held by:
                                </td>
                                <td>
                                    Devon Heritage Centre (South West Heritage Trust)
                                </td>
                            </tr>

                            <tr>
                                <td class="item-desc-label">
                                    Date:
                                </td>
                                <td>
                                <span class="itemContent">
                                        Dates unknown
                                </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-desc-label">
                                    Reference:
                                </td>
                                <td>
                                    <span class="itemContent">None stated</span>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </a>
                </li>
                <li>
                    <a href="/details/rd/ed54a4bf-62a5-4557-966f-5c5e6cc9f78f">

                        <h3><span class="highlight">FIRST</span> <span class="highlight">WORLD</span> <span
                                class="highlight">WAR</span> PAPERS</h3>

                        <p> WW1 Papers</p>

                        <table>
                            <tbody>
                            <tr>
                                <td class="item-desc-label">
                                    Held by:
                                </td>
                                <td>
                                    Cheshire Archives and Local Studies
                                </td>
                            </tr>

                            <tr>
                                <td class="item-desc-label">
                                    Date:
                                </td>
                                <td>
                                <span class="itemContent">
                                        1919
                                </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-desc-label">
                                    Reference:
                                </td>
                                <td>
                                    <span class="itemContent">D3898</span>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </a>
                </li>
                <li>
                    <a href="/details/rd/bec58dc5-0235-4020-bf70-00e09dce355a">

                        <h3><span class="highlight">First</span> <span class="highlight">World</span> <span
                                class="highlight">War</span> service.</h3>

                        <p>Catalogue of the papers and correspondence of; ALBERT CHARLES CHIBNALL FRS; (1894 - 1988)....
                            BIOGRAPHICAL AND AUTOBIOGRAPHICAL. Career, honours and awards. <span
                                class="highlight">First</span> <span class="highlight">World</span> <span
                                class="highlight">War</span> service.</p>

                        <table>
                            <tbody>
                            <tr>
                                <td class="item-desc-label">
                                    Held by:
                                </td>
                                <td>
                                    Cambridge University Library: Department of Manuscripts and University Archives
                                </td>
                            </tr>

                            <tr>
                                <td class="item-desc-label">
                                    Date:
                                </td>
                                <td>
                                <span class="itemContent">
                                        Dates unknown
                                </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-desc-label">
                                    Reference:
                                </td>
                                <td>
                                    <span class="itemContent">NCUACS 33/1/92/A.11-A.14</span>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </a>
                </li>
                <li>
                    <a href="/details/rd/d7977c08-3ab0-4371-b250-20c2e261627b">

                        <h3><span class="highlight">First</span> <span class="highlight">World</span> <span
                                class="highlight">War</span> Service</h3>

                        <p>Catalogue of the papers and correspondence of; ALBERT CHARLES CHIBNALL FRS; (1894 - 1988)....
                            BIOGRAPHICAL AND AUTOBIOGRAPHICAL. Career, honours and awards. <span
                                class="highlight">First</span> <span class="highlight">World</span> <span
                                class="highlight">War</span> service. 'Pilots flying log book'. Records flights December
                            1917-August 1918.</p>

                        <table>
                            <tbody>
                            <tr>
                                <td class="item-desc-label">
                                    Held by:
                                </td>
                                <td>
                                    Cambridge University Library: Department of Manuscripts and University Archives
                                </td>
                            </tr>

                            <tr>
                                <td class="item-desc-label">
                                    Date:
                                </td>
                                <td>
                                <span class="itemContent">
                                        1917 - 1918
                                </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-desc-label">
                                    Reference:
                                </td>
                                <td>
                                    <span class="itemContent">NCUACS 33/1/92/A.13</span>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </a>
                </li>
            </ul>
            <div id="paging-and-results-number">
                <div class="paginationWrapper">
                    <ul class="pagination">
                        <li class="current"><span>1</span></li>
                        <li><a href="/results/r/2?_q=First%20World%20War">2</a></li>
                        <li><a href="/results/r/3?_q=First%20World%20War">3</a></li>
                        <li><a href="/results/r/4?_q=First%20World%20War">4</a></li>
                        <li><a href="/results/r/5?_q=First%20World%20War">5</a></li>
                        <li><a href="/results/r/6?_q=First%20World%20War">6</a></li>
                        <li><a href="/results/r/7?_q=First%20World%20War">7</a></li>
                        <li><a href="/results/r/8?_q=First%20World%20War">8</a></li>
                        <li><a href="/results/r/9?_q=First%20World%20War">9</a></li>
                        <li class="next"><a href="/results/r/2?_q=First%20World%20War">Next</a></li>
                    </ul>
                </div>
                <div class="number-of-results">
                    <p>Show <span class="current-selection">15</span><span><a
                                href="/results/r?_q=First%20World%20War&amp;_ps=30">30</a></span><span><a
                                href="/results/r?_q=First%20World%20War&amp;_ps=60">60</a></span> items per page</p>
                </div>
            </div>
            <div class="emphasis-block">
                <h2>Can't find what you’re looking for?</h2>


                <p>Some record descriptions are much less detailed than others and you may not find what you are looking
                    for using a simple keyword search.</p>

                <ul>
                    <li>Try different spellings or search terms</li>
                    <li>Use the <a href="/advanced-search/r">advanced search</a> options</li>
                    <li>Try <a href="/browse" title="Browse">browsing</a> as well as searching</li>
                    <li>Look at our <a href="http://www.nationalarchives.gov.uk/records/atoz">research guides</a></li>
                    <li>
                        For search tips view <a href="/Home/Help"
                                                onclick="dcsMultiTrack('DCS.dcsuri','/SearchHelp', 'WT.ti', 'Search Help', 'WT.cg_n', 'Search Help')"
                                                id="searchHelp">Discovery help</a> or

                    </li>
                    <li><a href="/tags/index">Search for tags</a> that have been added by other researchers</li>
                </ul>


            </div>
        </div>
    </div>
</section>