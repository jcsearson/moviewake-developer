<?php include("parts/doctype.php"); ?>
<body>
	
	<header>
		<?php include("parts/header.php"); ?>

		<?php include("parts/nav.php"); ?>
	</header>


	<div class="container">
		<form id="form1" name="form1" class="wufoo topLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate action="contact-send.php">
			  
			<header id="header" class="info">
				<p>Please fill out a contact form below and I will get back to you as soon as possible!</p>
			</header>

			<ul>

				<li id="foli1" class="notranslate">
					<label class="desc" id="title1" for="Field1">
						Name
					</label></ br>
					<span>
						<input 
							id="Field1" 
							name="first_name" 
							type="text" 
							class="field text fn" 
							value="" 
							size="8" 
							tabindex="1"       />
						<label for="Field1">( First )</label>
					</span>
					<span>
						<input 
							id="Field2" 
							name="last_name" 
							type="text" 
							class="field text ln" 
							value="" 
							size="14" 
							tabindex="2" />
						<label for="Field2">( Last )</label>
					</span>
				</li>
				<li id="foli3" class="notranslate">
					<label class="desc" id="title3" for="Field3">
						Email
					</label>
					<div>
						<input 	
							id="Field3" 
							name="email" 
							type="email" 
							spellcheck="false" 
							class="field text medium" 
							value="" 
							maxlength="255" 
							tabindex="3"       />
					</div>
				</li>
				<li id="foli4" class="notranslate">
					<label class="desc" id="title4" for="Field4">
						Suggest Movie: <span>( optional )</span>
					</label>
					<div>
						<input 	
							id="Field4" 
						  	name="film" 
						  	type="text" 
						  	class="field text medium" 
						  	value="" 
						  	maxlength="255" 
						  	tabindex="4"       />
					</div>
				</li> <!-- #foli4 -->
				<li id="foli5" class="notranslate">
					<label class="desc" id="title5" for="Field5">
						Message:
					</label>
					<div>
						<textarea 
							id="Field5"
							name="message"
							class="field textarea small"
							spellcheck="true"
							rows="10" cols="50"
							tabindex="5"
							onkeyup=""
						       ></textarea>
					</div>
				</li>  <!-- #foli5 -->
				<li class="buttons">
					<div>
					            <input 
					            	id="saveForm" 
					            	name="saveForm" 
					            	class="btTxt submit" 
					            	type="submit" 
					            	value="Submit"/>
					</div>
				</li>
			</ul>
		</form>
	</div> <!-- contactform -->


<?php include("parts/footer.php"); ?>