<?php
/** Template Name: Style Guide */
get_header(); ?>

<article class="main-inner-content inner inner-<?php echo $post->post_name; ?>">
	<div class="container">
	  <?php get_template_part('blocks/inner-header/inner-header'); ?>
	  <div class="columns">
	    <div class="column is-9 page-container">
	      <?php if (have_posts()) : ?>
	        <?php while (have_posts()) : the_post(); ?>
	        	<div class="main-content">
	        		<?php the_content('More'); ?>
	        		<section class="examples">
	        			<h2>Headings</h2>
	        			<h1>Header one</h1>
	        			<h2>Header two</h2>
	        			<h3>Header three</h3>
	        			<h4>Header four</h4>
	        			<h5>Header five</h5>
	        			<h6>Header six</h6>
	        			<h3><span class="color-secondary">Change header color</span></h3>
	        			Use add this &lt;span&gt; code around any header style

	        			<code>&lt;h5&gt;&lt;span class="color-secondary"&gt;Header text&lt;/span&gt;&lt;/h5&gt;</code>

	        			Example:
	        			<h4>Normal H4 Header</h4>
	        			<h4><span class="color-secondary">Secondary Color H4 Header</span></h4>
	        			<a name="blockquotes"></a>
	        			<h2>Blockquotes</h2>
	        			Single line blockquote:
	        			<blockquote>Stay hungry. Stay foolish.</blockquote>
	        			Multi line blockquote with a cite reference:
	        			<blockquote>People think focus means saying yes to the thing you've got to focus on. But that's not what it means at all. It means saying no to the hundred other good ideas that there are. You have to pick carefully. I'm actually as proud of the things we haven't done as the things I have done. Innovation is saying no to 1,000 things. <cite>Steve Jobs - Apple Worldwide Developers' Conference, 1997</cite></blockquote>
	        			<a name="tables"></a>
	        			<h2>Tables</h2>
	        			<table>
	        			<tbody>
	        			<tr>
	        			<th>Employee</th>
	        			<th class="views">Salary</th>
	        			<th></th>
	        			</tr>
	        			<tr class="odd">
	        			<td><a href="http://john.do/">John Saddington</a></td>
	        			<td>$1</td>
	        			<td>Because that's all Steve Job' needed for a salary.</td>
	        			</tr>
	        			<tr class="even">
	        			<td><a href="http://tommcfarlin.com/">Tom McFarlin</a></td>
	        			<td>$100K</td>
	        			<td>For all the blogging he does.</td>
	        			</tr>
	        			<tr class="odd">
	        			<td><a href="http://jarederickson.com/">Jared Erickson</a></td>
	        			<td>$100M</td>
	        			<td>Pictures are worth a thousand words, right? So Tom x 1,000.</td>
	        			</tr>
	        			<tr class="even">
	        			<td><a href="http://chrisam.es/">Chris Ames</a></td>
	        			<td>$100B</td>
	        			<td>With hair like that?! Enough said...</td>
	        			</tr>
	        			</tbody>
	        			</table>
	        			<dl>
	        			 	<dd></dd>
	        			</dl>
	        		</section>
	        		<section class="example">
	        			<h2>Unordered Lists (Nested)</h2>
	        			<ul>
	        			 	<li>List item one
	        			<ul>
	        			 	<li>List item one
	        			<ul>
	        			 	<li>List item one</li>
	        			 	<li>List item two</li>
	        			 	<li>List item three</li>
	        			 	<li>List item four</li>
	        			</ul>
	        			</li>
	        			 	<li>List item two</li>
	        			 	<li>List item three</li>
	        			 	<li>List item four</li>
	        			</ul>
	        			</li>
	        			 	<li>List item two</li>
	        			 	<li>List item three</li>
	        			 	<li>List item four</li>
	        			</ul>
	        			<a name="ordered-lists"></a>
	        			<h2>Ordered List (Nested)</h2>
	        			<ol>
	        			 	<li>List item one
	        			<ol>
	        			 	<li>List item one
	        			<ol>
	        			 	<li>List item one</li>
	        			 	<li>List item two</li>
	        			 	<li>List item three</li>
	        			 	<li>List item four</li>
	        			</ol>
	        			</li>
	        			 	<li>List item two</li>
	        			 	<li>List item three</li>
	        			 	<li>List item four</li>
	        			</ol>
	        			</li>
	        			 	<li>List item two</li>
	        			 	<li>List item three</li>
	        			 	<li>List item four</li>
	        			</ol>
	        		</section>
	        		<section class="example">
	        			<a name="html-tags"></a>
	        			<h2>HTML Tags</h2>
	        			These supported tags come from the WordPress.com code <a title="Code" href="http://en.support.wordpress.com/code/">FAQ</a>.
	        			<h3>Buttons and Links</h3>
	        			To create a button

	        			<code>&lt;a <strong>class="btn"</strong> href="pageURL"&gt;Button Text&lt;/a&gt;</code>

	        			Example: <a class="btn" href="#">Button Text</a>

	        			To create a link standard link

	        			<code>&lt;a href="pageURL"&gt;Link Text&lt;/a&gt;</code>

	        			Example: <a href="#">Link Text</a>

	        			<strong>Address Tag</strong>

	        			<address>1 Infinite Loop<br>
	        			Cupertino, CA 95014<br>
	        			United States</address>
	        		</section>
	        		<section class="example">
	        			<a name="page-alignment"></a>
	        			<h2>Page Alignment</h2>
	        			<h3>Default</h3>
	        			This is a paragraph. It should not have any alignment of any kind. It should just flow like you would normally expect. Nothing fancy. Just straight up text, free flowing, with love. Completely neutral and not picking a side or sitting on the fence. It just is. It just freaking is. It likes where it is. It does not feel compelled to pick a side. Leave him be. It will just be better that way. Trust me.
	        			<h3>Left Align</h3>
	        			<p style="text-align: left;">This is a paragraph. It is left aligned. Because of this, it is a bit more liberal in it's views. It's favorite color is green. Left align tends to be more eco-friendly, but it provides no concrete evidence that it really is. Even though it likes share the wealth evenly, it leaves the equal distribution up to justified alignment.</p>

	        			<h3>Center Align</h3>
	        			<p style="text-align: center;">This is a paragraph. It is center aligned. Center is, but nature, a fence sitter. A flip flopper. It has a difficult time making up its mind. It wants to pick a side. Really, it does. It has the best intentions, but it tends to complicate matters more than help. The best you can do is try to win it over and hope for the best. I hear center align does take bribes.</p>

	        			<h3>Right Align</h3>
	        			<p style="text-align: right;">This is a paragraph. It is right aligned. It is a bit more conservative in it's views. It's prefers to not be told what to do or how to do it. Right align totally owns a slew of guns and loves to head to the range for some practice. Which is cool and all. I mean, it's a pretty good shot from at least four or five football fields away. Dead on. So boss.</p>

	        			<h3>Justify Align</h3>
	        			<p style="text-align: justify;">This is a paragraph. It is justify aligned. It gets really mad when people associate it with Justin Timberlake. Typically, justified is pretty straight laced. It likes everything to be in it's place and not all cattywampus like the rest of the aligns. I am not saying that makes it better than the rest of the aligns, but it does tend to put off more of an elitist attitude.</p>
	        		</section>
	        	</div>
	        <?php endwhile; ?>
	      <?php endif; ?>
	    </div>
	    <?php get_sidebar(); ?>
	  </div>
	</div>
</article>

<?php get_footer();
