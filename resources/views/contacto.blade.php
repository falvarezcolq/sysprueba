@extends('layouts.principal')

@section('content')
		<div class="contact-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
					<p>Movie Theater</p>
				</div>
				<div class="search v-search">
					<form>
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
						<input type="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
			<!---contact-->
			<div class="main-contact">
				 <h3 class="head">CONTACT</h3>
				 <p>WE'RE ALWAYS HERE TO HELP YOU</p>
				 <div class="contact-form">
					 <form>
						 <div class="col-md-6 contact-left">
							  <input type="text" placeholder="Name" required/>
							  <input type="text" placeholder="E-mail" required/>
							  <input type="text" placeholder="Phone" required/>
						  </div>
						  <div class="col-md-6 contact-right">
							 <textarea placeholder="Message"></textarea>
							 <input type="submit" value="SEND"/>
						 </div>
						 <div class="clearfix"></div>
					 </form>
			     </div>
				 <div class="contact_info">
					 <h3>Find Us Here</h3>
					 <div class="map">
						<iframe width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#000;text-align:left;font-size:12px">View Larger Map</a></small>
					</div>
				 </div>
			</div>
@stop