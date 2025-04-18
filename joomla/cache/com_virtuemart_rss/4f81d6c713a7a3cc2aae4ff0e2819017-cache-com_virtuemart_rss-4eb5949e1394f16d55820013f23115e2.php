<?php die("Access Denied"); ?>#x#a:2:{s:6:"result";a:5:{i:0;O:8:"stdClass":3:{s:4:"link";s:61:"https://virtuemart.net/news/security-and-bugfix-release-4-4-8";s:5:"title";s:50:"Security and Bugfix release 4.4.8 - Discord Server";s:11:"description";s:2514:"<p>The security issue requires the permission to edit categories, so it is even likely that no shop is affected. Only multivendor shops that allow category editing may be affected. This issue was found by Adam Wallwork.</p>
<p>A small feature has been added for the checkboxes of “tos” and similar. It is now possible to use an article id or alias in the "default" field to load a joomla article if custom userfield and layout "tos" is selected. It is also possible to set the text to the "description" field only. Very handy for additional contract terms.</p>
<p>We have replaced our old TcPdf library with the official updated version 6.8.2 of TcPdf. The versioning was taken from the library. So it looks like a high jump, but the library has no new features, but is better secured and adapted for PHP8.</p>
<p>We have opened a new discord server which is in general free for any community member. The forum shows the invite link, if you are at least in the "Jr. Member" group, which is the first after "Beginner". You are welcome to join us there.</p>
<p style="text-align: center;"><a class="btn btn-primary" href="https://extensions.virtuemart.net/support-updates/virtuemart-membership">DOWNLOAD VirtueMart 4.4.8<br />NOW</a> with a membership</p>
<h4>Enhancements</h4>
<ul>
<li>Registration fields appear now at the end of the address data fields. This creates are more modern flow for one page checkouts.</li>
<li>Fixed getInvoiceName to use set layout.</li>
<li>Order edit, adding selection of tax for shipment/payment</li>
<li>Added pagination for shipment/payment administration list</li>
<li>Vendor view, added address fields to skip</li>
</ul>
<h4>Bugfixes</h4>
<ul>
<li>Function mergeSessionSgrps added cast to array</li>
<li>Table Media, added fields for convert to ints</li>
<li>Cart added property cart to prevent dynamic adding</li>
<li>Replaced shopFunctionsF::getInvoiceName against VirtueMartModelInvoice::getInvoiceName</li>
<li>vmplugin, added unsetForDebug</li>
<li>Added some cast to ints storing category xref table</li>
<li>Guests are only registered if isset($_REQUEST['register'] is true (optin by design)</li>
<li>Fixed deletion of positions in cart</li>
<li>vmJsApi fixed popup function so that we can use different containers, but load the same lib</li>
<li>Search module, removed wrong post data</li>
</ul>
<p style="text-align: center;"><a class="btn btn-primary" href="https://dev.virtuemart.net/attachments/1393">DOWNLOAD VirtueMart 4.4.6<br />NOW</a> without membership</p>";}i:1;O:8:"stdClass":3:{s:4:"link";s:48:"https://virtuemart.net/news/bugfix-release-4-4-6";s:5:"title";s:20:"Bugfix release 4.4.6";s:11:"description";s:2724:"<p>I am sorry guys, the last release was rushed by the security issue and I underestimated that testers were not testing due holidays, silvester and all that. This version now is tested very well. Many hours by different testers went into testing. I added a small tool, which fixes all images which lost the image property for you.</p>
<p style="text-align: center;"><a class="btn btn-primary" href="https://extensions.virtuemart.net/support-updates/virtuemart-membership">DOWNLOAD VirtueMart 4.4.6<br />NOW</a> with a membership</p>
<h4><br />Fixed/enhanced/enabled Feature</h4>
<ul>
<li>Enabled registration on the first page of the BS5 native OPC</li>
<li>Added small tool, which updates the "is image" property for all media</li>
<li>Google drive images are working now (just enter the right link with https and set the "is image" checkbox)</li>
<li>Fixed pagination issues. Pagination should now keep the keyword, or set tags</li>
<li>Fixed order editing shipment tax</li>
<li>Added hidden config searchEnabled.</li>
<li>Fixed problem that people misused the notify list due following<br />- captcha "repaired" by just replacing the checked option notify_captcha against ask_captcha. This means that the options for the ask a question are used<br />- by checking if the feature is actually enabled<br />- by checking if the product is actually out of stock<br />read more here https://forum.virtuemart.net/index.php?topic=152246.msg543829<br /><br /></li>
</ul>
<h4>For 3rd party developers maybe interesting</h4>
<ul>
<li>Blocked writing of js if format is pdf, we never want js in our pdfs</li>
<li>vmjsapi function setPath, the second param is special now and listens on the word "admin" (which cannot be a normal path) to indicate that the script must be loaded from the admin area</li>
</ul>
<h4>Bugfixes</h4>
<ul>
<li>Fixed problem with "is image" checkbox, which is now prechecked if the media is an image.</li>
<li>Fixed captcha by removing second param of redirect</li>
<li>JRoute, second param should be yes (use Xhtml)</li>
<li>Fixed storing of user address if not in the checkout</li>
<li>Vmvalidator is now loaded with defer true</li>
<li>Product model, storing a product should not change the set filter of the list anylonger</li>
<li>Fixed that sometimes a non published category was used</li>
<li>Fixed precalculation of variants if an virtual empty option is used</li>
<li>Router fixes for full category tree and withoiut and menu item and category name mixed mode</li>
<li>bs5-stockandle layout replaced JFunctions against the vm ones</li>
<li>Fix in model customfields preventing trim for null</li>
<li>jQuery 3.7 needs "filter" not "find" (fixes ajax update if there are related products)</li>
</ul>";}i:2;O:8:"stdClass":3:{s:4:"link";s:50:"https://virtuemart.net/news/security-release-4-4-4";s:5:"title";s:29:"Security release 4.4.4 Update";s:11:"description";s:1306:"<p>From time to time it happens. We have an XSS issue. Reported by Aman Rai. More Infos later. Version vm4.4.4 has a fix to prevent them.</p>
<p>[Update] After some further investigation together with the Joomla core team, this issue can not be exploited in the latest Joomla versions. If you have Joomla 5.1.4 or later or 4.4.8 or later installed, the issue is already fixed. We did not check against joomla 3.</p>
<p>[Update 2] Sorry guys, a little error found. If you store a product with media, the checkbox "is image" is not preselected. The fix is ready, but this time we want to take more time for testing to prevent such stupid errors (mea culpa).</p>
<ul>
<li>Adjustments for Tableupdater to prevent unecessary updating of keys in mysql8</li>
<li>vmUri extended whitelist, function works now also with given query</li>
<li>vRequest extended function getVar to work with given source</li>
<li>install.sql fixed TINYINT(4) against TINYINT(1)</li>
<li>added the option to add no searchfield</li>
<li>added setConvertInt also for plugin tables</li>
<li>added property "isImage" for medias, works BC</li>
<li>fixed currency if none is set</li>
<li>fixed adding of new states in the new admin layout</li>
<li>fixed problem in router</li>
<li>user registration fix if not in checkout</li>
</ul>
<p> </p>";}i:3;O:8:"stdClass":3:{s:4:"link";s:48:"https://virtuemart.net/news/just-a-little-update";s:5:"title";s:20:"Just a little update";s:11:"description";s:2689:"<p>Just a note to my last news. The problem goes on, I just tried to install VirtueMart on the last joomla5.3 and it was not even possible to install it. On the other hand, it is funny to read the patch notes. One patch will fix an issue of joomla 5, but for j5.3, we solved it already in this release. The question is, why we have to solve something, which worked since vm2.6? After this release should be more time to work on WP and make some committs.</p>
<p style="text-align: center;"><a class="btn btn-primary" href="https://extensions.virtuemart.net/support/virtuemart-supporter-membership-bronze-detail">DOWNLOAD VirtueMart 4.4.2 with the Membership<br />NOW</a></p>
<h4>Features</h4>
<ul>
<li>Template vmBasic, Added register and checkout button, removed registration fields from cart view.</li>
<li>Bundles added option "orderableBrowse" for disabling add to car in listing</li>
<li>Added option calculateVariantsOnFreshLoad, which directly calculates the price for the selected variant (with php)</li>
<li>Fixed dragndrop for customs, products, categories, countries</li>
<li>Added missing states list and states edit layouts to new admin template</li>
<li>Hiddden config reuseorders, default is set to 0/off now</li>
</ul>
<h4>For developers</h4>
<ul>
<li>New variable to set origin debug state, vmEcho::$debugSet and vmEcho::$logDebugSet</li>
<li>VmEcho added check for function_exists('var_dump'), which is used if existing</li>
<li>VmJsApi function setPath, we add BE and FE override paths only if given, also added the override paths of the current admin template</li>
</ul>
<h4>Fixes</h4>
<ul>
<li>Fixes for pagination in cowork with RuposTel, correct use of index.php and using categoryId via request over the one set in the menuItem</li>
<li>Fixed problem with jumping thumbs in product edit related products/categories</li>
<li>Enhanced table updater to work also with Index and better check which indexes should be modified</li>
<li>User model, unset register pw in case of fail in log</li>
<li>Added new pattern using vmEcho::$debugSet</li>
<li>Fixed old VmConfig::$_debug against VmEcho::$_debug</li>
<li>Customfields function calculateModificators added check for string before vmJsApi::safe_json_decode</li>
<li>xml format fixes</li>
<li>Translated text for "catalogue mode and accessing cart"</li>
<li>Textinputplugin checks letters only if there are some letters, fixed missing jQuery</li>
<li>Model customs function getCustoms, removed useless return as $data-&gt;items instead just as $data</li>
<li>Removed outdated dead code</li>
<li>PayPal Checkout fixed mix of dynamic and static calls</li>
<li>Use of new VmEcho debugSet pattern and new ppdebug</li>
</ul>";}i:4;O:8:"stdClass":3:{s:4:"link";s:84:"https://virtuemart.net/news/release-of-virtuemart-4-4-and-roadmap-always-push-beyond";s:5:"title";s:57:"Release of VirtueMart 4.4 and Roadmap, always push beyond";s:11:"description";s:1157:"<p>The new version 4.4 has few new features, but reflects the evolving development process. Longterm users know that VirtueMart is developed in a rapid prototyping and KaiZen philosophy style. So if we develop a new feature, our testers sometimes have 10 new test versions a day. On the other hand, we try to evolve the code without hard breaks. For example developers can use the same function to get a category tree, but the technic behind that function drastically changed over the years. No stone was left unturned. </p>
<p>A known joomla ecommerce component announced last weeks, that they stop development. Of course some eager developers created a fork, but they will run into the same problems as the prior developers. And these problems are similar to our problems, in that it is not enough to just keep the core development paid and ongoing, we must as a community also keep our 3rd party developers and encourage new ones to join us. </p>
<p style="text-align: center;"><a class="btn btn-primary" href="//dev.virtuemart.net/attachments/1386">DOWNLOAD VirtueMart 4.4.0<br />NOW</a></p>
<h3>Lets create a VirtueMart for Joomla and Wordpress</h3>
";}}s:6:"output";s:0:"";}