<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap modal carousel : more-examples </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="/bootstrap-modal-carousel/dist/css/bootstrap-modal-carousel.min.css">
		<style>
			.nav .external {
				margin-top: 30px;
			}
			.row + .row,
			.row-fluid + .row-fluid {
				margin-top: 20px;
			}
			.btn .glyphicon + span {
				margin-left: .5em;
			}
			@media (min-width: 768px) {
				h2:first-child, .h2:first-child, h3:first-child, .h3:first-child {
					margin-top: 0;
				}
			}
			
				/* EXAMPLE 1 */
				#myModal1 .modal-content {
					background: rgba(0, 0, 0, .5);
				}
				#myModal1 .modal-header {
					border: 0;
					color: #fff;
				}
				#myModal1 .modal-footer {
					border-color: rgba(0, 0, 0, .5);
				}
				/* EXAMPLE 2 */
				#myModal2 .modal-content {
					background: rgba(0, 0, 0, .5);
				}
				#myModal2 .modal-header {
					border: 0;
					color: #fff;
				}
				#myModal2 .modal-footer {
					border-color: rgba(0, 0, 0, .5);
				}
				#myModal2 .carousel-caption {
					background-color: rgba(0, 0, 0, .5);
					bottom: -100%;
					-webkit-transition: bottom 1s;
					transition: bottom 1s;
				}
				#myModal2 .item.active >.carousel-caption {
					bottom: 0;
				}
			
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>Bootstrap modal carousel</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<ul class="nav nav-pills nav-stacked">
						<li class="">
							<a href="index.html">Presentation</a>
						</li>
						<li class="">
							<a href="modal-carousel.html">Modal-carousel</a>
							
						</li>
						<li class="">
							<a href="carousel-fit.html">Carousel-fit</a>
							
						</li>
						<li class="">
							<a href="modal-local.html">Modal-local</a>
							
						</li>
						<li class="">
							<a href="modal-fullscreen.html">Modal-fullscreen</a>
							
						</li>
						<li class=" active ">
							<a href="more-examples.html">More examples</a>
							
								<ul>
									
										<li><a href="#common">Common parts</a></li>
									
										<li><a href="#example1">Black theme</a></li>
									
										<li><a href="#example2">Captions animations</a></li>
									
								</ul>
							
						</li>
						<li class="external">
							<a href="https://github.com/noreiller/bootstrap-modal-carousel">
								<span class="glyphicon glyphicon-new-window"></span>
								<span>GitHub project</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-sm-9">


<p>I added some advanced examples to customize the modal carousel with the code</p>

<h2 id="common">Common parts</h2>

<pre><code>&lt;link href=&quot;bootstrap-modal-carousel.css&quot; rel=&quot;stylesheet&quot; /&gt;

&lt;script src=&quot;bootstrap-modal-carousel.js&quot;/&gt;&lt;/script/&gt;

&lt;button type=&quot;button&quot; class=&quot;btn&quot; data-toggle=&quot;modal&quot; data-target=&quot;#myModal&quot; data-local=&quot;#myCarousel&quot;&gt;Demo&lt;/button&gt;</code></pre>

<hr />

<h2 id="example1">Black theme</h2>

<h3>Demo</h3>
<p>A semi-transparent black modal with carousel controls moved into the modal footer.</p>
<p>
	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" data-local="#myCarousel1">
		<span class="glyphicon glyphicon-fullscreen"></span>
		<span>Show example</span>
	</button>
</p>

<div id="myCarousel1" class="carousel slide carousel-fit" data-ride="carousel" data-interval="60000">
	

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<img data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide">
			<div class="carousel-caption">
				<h3>First slide label</h3>
				<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
			</div>
		</div>
		<div class="item">
			<img data-src="holder.js/750x400/auto/#666:#444/text:Second slide" alt="Second slide">
			<div class="carousel-caption">
				<h3>Second slide label</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
		</div>
		<div class="item">
			<img data-src="holder.js/600x300/auto/#555:#333/text:Third slide" alt="Third slide">
			<div class="carousel-caption">
				<h3>Third slide label</h3>
				<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
			</div>
		</div>
	</div>

	
</div>

<div class="modal fade modal-fullscreen force-fullscreen " id="myModal1"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				
					<button type="button" class="btn btn-danger pull-right" data-dismiss="modal" aria-hidden="true">
						<span class="glyphicon glyphicon-remove"></span>
						<span>Close</span>
					</button>
				
				
					<h4 class="modal-title">Modal title</h4>
				
			</div>
			<div class="modal-body">
				<p>One fine body&hellip;</p>
			</div>
			
				<div class="modal-footer">
					
						<!-- Controls -->
						<a class="left carousel-control" href="#myCarousel1" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="right carousel-control" href="#myCarousel1" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					
				</div>
			
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<h3>The code</h3>

<pre><code>&lt;style&gt;
  .modal.modal-fullscreen .modal-content {
    background: rgba(0, 0, 0, .5);
  }
  .modal.modal-fullscreen .modal-header {
    border: 0;
    color: #fff;
  }
  .modal.modal-fullscreen .modal-footer {
    border-color: rgba(0, 0, 0, .5);
  }
&lt;/style&gt;

&lt;div id=&quot;myCarousel&quot; class=&quot;carousel slide carousel-fit&quot; data-ride=&quot;carousel&quot;&gt;
  &lt;!-- Wrapper for slides --&gt;
  &lt;div class=&quot;carousel-inner&quot;&gt;
    &lt;div class=&quot;item active&quot;&gt;
      &lt;img data-src=&quot;holder.js/900x500/auto/#777:#555/text:First slide&quot; alt=&quot;First slide&quot;&gt;
      &lt;div class=&quot;carousel-caption&quot;&gt;
        &lt;h3&gt;First slide label&lt;/h3&gt;
        &lt;p&gt;Nulla vitae elit libero, a pharetra augue mollis interdum.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;item&quot;&gt;
      &lt;img data-src=&quot;holder.js/750x400/auto/#666:#444/text:Second slide&quot; alt=&quot;Second slide&quot;&gt;
      &lt;div class=&quot;carousel-caption&quot;&gt;
        &lt;h3&gt;Second slide label&lt;/h3&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;item&quot;&gt;
      &lt;img data-src=&quot;holder.js/600x300/auto/#555:#333/text:Third slide&quot; alt=&quot;Third slide&quot;&gt;
      &lt;div class=&quot;carousel-caption&quot;&gt;
        &lt;h3&gt;Third slide label&lt;/h3&gt;
        &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;modal fade modal-fullscreen force-fullscreen&quot; id=&quot;myModal&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;myModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
  &lt;div class=&quot;modal-dialog&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
      &lt;div class=&quot;modal-header&quot;&gt;
        &lt;button class=&quot;btn btn-danger pull-right&quot; type=&quot;button&quot; data-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;
          &lt;span class=&quot;glyphicon glyphicon-remove&quot;&gt;&lt;/span&gt;
          &lt;span&gt;Close&lt;/span&gt;
        &lt;/button&gt;
        &lt;h4 class=&quot;modal-title&quot;&gt;Modal title&lt;/h4&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-body&quot;&gt;
        &lt;p&gt;One fine body&hellip;&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-footer&quot;&gt;
        &lt;!-- Controls --&gt;
        &lt;a class=&quot;left carousel-control&quot; href=&quot;#myCarousel&quot; data-slide=&quot;prev&quot;&gt;
          &lt;span class=&quot;glyphicon glyphicon-chevron-left&quot;&gt;&lt;/span&gt;
        &lt;/a&gt;
        &lt;a class=&quot;right carousel-control&quot; href=&quot;#myCarousel&quot; data-slide=&quot;next&quot;&gt;
          &lt;span class=&quot;glyphicon glyphicon-chevron-right&quot;&gt;&lt;/span&gt;
        &lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;&lt;!-- /.modal-content --&gt;
  &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
&lt;/div&gt;&lt;!-- /.modal --&gt;</code></pre>

<hr />

<h2 id="example2">Captions animations</h2>

<h3>Demo</h3>
<p>Display the captiononly when active.</p>
<p>
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal2" data-local="#myCarousel2">
    <span class="glyphicon glyphicon-fullscreen"></span>
    <span>Show example</span>
  </button>
</p>

<div id="myCarousel2" class="carousel slide carousel-fit" data-ride="carousel" data-interval="60000">
	

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<img data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide">
			<div class="carousel-caption">
				<h3>First slide label</h3>
				<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
			</div>
		</div>
		<div class="item">
			<img data-src="holder.js/750x400/auto/#666:#444/text:Second slide" alt="Second slide">
			<div class="carousel-caption">
				<h3>Second slide label</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
		</div>
		<div class="item">
			<img data-src="holder.js/600x300/auto/#555:#333/text:Third slide" alt="Third slide">
			<div class="carousel-caption">
				<h3>Third slide label</h3>
				<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
			</div>
		</div>
	</div>

	
</div>

<div class="modal fade modal-fullscreen force-fullscreen " id="myModal2"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				
					<button type="button" class="btn btn-danger pull-right" data-dismiss="modal" aria-hidden="true">
						<span class="glyphicon glyphicon-remove"></span>
						<span>Close</span>
					</button>
				
				
					<h4 class="modal-title">Modal title</h4>
				
			</div>
			<div class="modal-body">
				<p>One fine body&hellip;</p>
			</div>
			
				<div class="modal-footer">
					
						<!-- Controls -->
						<a class="left carousel-control" href="#myCarousel2" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="right carousel-control" href="#myCarousel2" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					
				</div>
			
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<h3>The code</h3>

<pre><code>&lt;style&gt;
  .modal.modal-fullscreen .modal-content {
    background: rgba(0, 0, 0, .5);
  }
  .modal.modal-fullscreen .modal-header {
    border: 0;
    color: #fff;
  }
  .modal.modal-fullscreen .modal-footer {
    border-color: rgba(0, 0, 0, .5);
  }
  #myModal .carousel-caption {
    background-color: rgba(0, 0, 0, .5);
    bottom: -100%;
    -webkit-transition: bottom 1s;
    transition: bottom 1s;
  }
  #myModal .item.active >.carousel-caption {
    bottom: 0;
  }
&lt;/style&gt;

&lt;div id=&quot;myCarousel&quot; class=&quot;carousel slide carousel-fit&quot; data-ride=&quot;carousel&quot;&gt;
  &lt;!-- Wrapper for slides --&gt;
  &lt;div class=&quot;carousel-inner&quot;&gt;
    &lt;div class=&quot;item active&quot;&gt;
      &lt;img data-src=&quot;holder.js/900x500/auto/#777:#555/text:First slide&quot; alt=&quot;First slide&quot;&gt;
      &lt;div class=&quot;carousel-caption&quot;&gt;
        &lt;h3&gt;First slide label&lt;/h3&gt;
        &lt;p&gt;Nulla vitae elit libero, a pharetra augue mollis interdum.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;item&quot;&gt;
      &lt;img data-src=&quot;holder.js/750x400/auto/#666:#444/text:Second slide&quot; alt=&quot;Second slide&quot;&gt;
      &lt;div class=&quot;carousel-caption&quot;&gt;
        &lt;h3&gt;Second slide label&lt;/h3&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;item&quot;&gt;
      &lt;img data-src=&quot;holder.js/600x300/auto/#555:#333/text:Third slide&quot; alt=&quot;Third slide&quot;&gt;
      &lt;div class=&quot;carousel-caption&quot;&gt;
        &lt;h3&gt;Third slide label&lt;/h3&gt;
        &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

&lt;div class=&quot;modal fade modal-fullscreen force-fullscreen&quot; id=&quot;myModal&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;myModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
  &lt;div class=&quot;modal-dialog&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
      &lt;div class=&quot;modal-header&quot;&gt;
        &lt;button class=&quot;btn btn-danger pull-right&quot; type=&quot;button&quot; data-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;
          &lt;span class=&quot;glyphicon glyphicon-remove&quot;&gt;&lt;/span&gt;
          &lt;span&gt;Close&lt;/span&gt;
        &lt;/button&gt;
        &lt;h4 class=&quot;modal-title&quot;&gt;Modal title&lt;/h4&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-body&quot;&gt;
        &lt;p&gt;One fine body&hellip;&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-footer&quot;&gt;
        &lt;!-- Controls --&gt;
        &lt;a class=&quot;left carousel-control&quot; href=&quot;#myCarousel&quot; data-slide=&quot;prev&quot;&gt;
          &lt;span class=&quot;glyphicon glyphicon-chevron-left&quot;&gt;&lt;/span&gt;
        &lt;/a&gt;
        &lt;a class=&quot;right carousel-control&quot; href=&quot;#myCarousel&quot; data-slide=&quot;next&quot;&gt;
          &lt;span class=&quot;glyphicon glyphicon-chevron-right&quot;&gt;&lt;/span&gt;
        &lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;&lt;!-- /.modal-content --&gt;
  &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
&lt;/div&gt;&lt;!-- /.modal --&gt;</code></pre>

				</div>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script src="/bootstrap-modal-carousel/dist/js/bootstrap-modal-carousel.min.js"></script>
		<script src="/bootstrap-modal-carousel/dist/js/demo.min.js"></script>
	</body>
</html>

