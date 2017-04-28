<?php
// hCard
ini_set('zend.ze1_compatibility_mode', 0);
$data = simplexml_load_file('cv.xml');
$name = $data->header->name->firstname . ' ' . $data->header->name->surname;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $name ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="<?php echo $data['name'] ?>" />
	<meta name="description" content="Ivan Peevski's Resume and Personal Site" />
	<meta name="keywords" content="Ivan Peevski, resume, dotProject, programming, software development, freelance" />
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="resume.css" />
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />
</head>
<body class="hresume">
		<ul class="nav nav-pills">
    <li class="dropdown active">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#top">Top</a></li>
        <li><a href="#sum">Summary</a></li>
        <li><a href="#experience">Experience</a></li>
        <li><a href="#work">Work</a></li>
        <li><a href="#education">Education</a></li>
        <li class="divider"></li>
        <li><a href="#awards">Awards</a></li>
      </ul>
    </li>
  </ul>
<div class="container">
	<h1 class="text-center"><?php echo $name ?></h1>
	

	<div class="pull-right">
		<address class="contact vcard">
			<span id="name" class="fn n"><?php echo $name ?></span><br />
			<span class="adr">
				<span class="street-address"><?php echo $data->header->address->street ?></span>
				<span class="locality"><?php echo $data->header->address->city ?></span> <span class="region"><?php echo $data->header->address->state ?></span> <span class="postal-code"><?php echo $data->header->address->postalCode ?></span>
			</span><br />
			<a class="email" href="mailto:<?php echo $data->header->contact->email ?>"><?php echo $data->header->contact->email ?></a><br />
			<span class="tel"><?php echo $data->header->contact->phone ?></span><br />
			<a class="url" href="<?php echo $data->header->contact->url ?>"><?php echo $data->header->contact->url ?></a>
		</address>
	</div>
	
	<div class="row">
		<h2 id="sum">Summary of Qualifications</h2>
		<ul class="quals">
			<li>Experienced Software Architect, Designer &amp; Engineer (<?php echo (date('Y') - 1996) ?> years). Shipped numerous <a href="#work">products</a>.</li>
			<li>Manager and Technical Leader (2 years). Led a team of five.</li>
			<li>PHP Developer (<?php echo (date('Y') - 2002) ?> years)</li>
		</ul>
	</div>

	<div id="experience" class="compexps row">
		<h2>Experience</h2>
		<table class="table">
			<thead>
			<tr>
				<th class="col-md-6">Skill</th>
				<th class="col-md-6">Rating</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($data->skillareas->skillarea as $skillarea) { ?>
			<tr>
				<td colspan="2"><?php echo $skillarea->title ?></td>
			</tr>

				<?php 
					if ($skillarea->skillset->skills) { 
						foreach ($skillarea->skillset as $skillset){
				?>
			<tr>
				<td colspan="2"><?php echo $skillset->title ?></td>
			</tr>
					<?php 
					$skills = $skillset->skills;
					$last_item = $skills->skill[count($skills->skill) - 1];
					foreach($skills->skill as $skill) { 
						?>
					<tr>
						<td class="small"><a class="skill" rel="tag"><?php echo $skill ?></a>
						<td>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill['rating'] ?>0%;">
								  <?php echo $skill['rating'] ?>
								</div>
							</div>
						</td>
					</tr>
			<?php } ?>
			<?php	} } else { 
				foreach ($skillarea->skillset->skill as $skill) {
				 ?>
				 <tr>
					<td class="small"><a class="skill" rel="tag"><?php echo $skill ?></a></td>
					<td>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill['rating'] ?>0%;">
							  <?php echo $skill['rating'] ?>
							</div>
						</div>
					</td>
				</tr>
			<?php } } ?>
			<?php } ?>
		</tbody>
		</table>
	</div>

	<div class="row">
	<h2 id="work">Employment &amp; Products</h2>
	<ol class="list-unstyled vcalendar">
		<?php foreach ($data->history->job as $job) { ?>
		<li class="job experience vevent vcard">
			<div class="col-md-3">
				<h4>
					<?php $date = $job->period->from->date->year . ' ' . $job->period->from->date->month;	?>
					<abbr class="dtstart" title="<?php echo date('Y-m-d', strtotime($date)) ?>"><?php echo $date ?></abbr> -
					<?php $date = $job->period->to->date . ' ' . $job->period->to->date->year . ' ' . $job->period->to->date->month;	?> 
					<abbr class="dtend" title="<?php echo date('Y-m-d', strtotime($date)) ?>"><?php echo $date ?></abbr>
				</h4>
			</div>
			<div class="col-md-9">
			<h4>
				<a class="org company location url" href="<?php echo $job->employer->url[0] ?>"><?php echo $job->employer ?></a>
			</h4>
			<h3 class="jobtitle summary title"><?php echo $job->jobtitle ?></h3>
			<p class="description"><?php echo $job->description ?></p>
			<div class="completed">
				<?php if (!empty($job->achievements->achievement)) { ?>
				<h5>Achievements</h5>
				<ul>
				<?php foreach ($job->achievements->achievement as $achievement) { ?>
					<li><?php echo $achievement ?></li>
				<?php } ?>
				</ul>
				<?php } ?>
				
				<?php if (!empty($job->projects->project)) { ?>
				<h5>Projects</h5>
				<ul>
				<?php foreach ($job->projects->project as $project) { ?>
					<li>
				    <?php if (!empty($project->url)) { ?>
							<?php if (preg_match('|^(.+)( - .*)$|', $project, $matches)) { ?>
					    <a class="url" href="<?php echo $project->url ?>"><?php echo $matches[1] ?></a>
					    <?php echo $matches[2] ?>
					    <?php } else { ?>
					    <a class="url" href="<?php echo $project->url ?>"><?php echo $project ?></a>
					    <?php } ?>
				    <?php } else { ?>
						<?php echo $project ?>
				    <?php } ?>
					</li>
				<?php } ?>
				</ul>
				<?php } ?>
			</div>
			</div>
		</li>
		<?php } ?>
	</ol>
	</div>

	<div class="vcalendar row">
		<h2 id="education">Education</h2>
		<ol class="list-unstyled">
			<?php foreach($data->academics->degrees->degree as $school) { ?>
			<li class="education vevent school">
				<div class="col-md-3">
					<h4>
						<?php $date = $school->period->from->date->year . ' ' . $school->period->from->date->month;	?>
						<abbr class="dtstart" title="<?php echo date('Y-m-d', strtotime($date)) ?>"><?php echo $date ?></abbr> - 
						<?php $date = $school->period->to->date->year . ' ' . $school->period->to->date->month;	?>
						<abbr class="dtend" title="<?php echo date('Y-m-d', strtotime($date)) ?>"><?php echo $date ?></abbr>
					</h4>
				</div>
				<div class="col-md-9">
					<h4>
						<a class="institution url summary" href="<?php echo $school->institution->url ?>"><?php echo $school->institution ?></a>
					</h4>
					<ol class="degrees">
						<li><?php echo $school->major . ' ('.$school->level.')' ?></li>
					</ol>
					<p><?php echo $school->description ?></p>
				</div>
			</li>
			<?php } ?>
		</ol>
	</div>

	<div id="awards" class="awards row">
		<h2>Awards</h2>
		<ol class="list-unstyled">
			<?php foreach ($data->awards->award as $award) { ?>
			<li class="vevent">
				<div class="col-md-3">
					<h4>
						<abbr class="dtstart" title="<?php echo date('Y-m-d', strtotime($award->date->year)) ?>"><?php echo $award->date->year ?></abbr>
					</h4>
				</div>
				<div class="col-md-9">
					<h4>
						<span class="summary"><?php echo $award->title ?> (<a href="<?php echo $award->organization->url ?>"><?php echo trim($award->organization) ?></a>)</span>
					</h4>
				</div>
			</li>
			<?php } ?>
		</ol>
	</div>

	<div class="interests row">
		<h2>Other Interests</h2>
		<ul class="list-inline">
			<?php 
			$last_item = $data->interests->interest[count($data->interests->interest) - 1]->title;
			foreach ($data->interests->interest as $interest) { ?>
			<li><?php echo $interest->title ?><?php echo ($interest->title == $last_item ? '' : ',') ?></li>
			<?php } ?>
		</ul>
		<h2>Additional Information</h2>
		<ul class="list-inline">
			<?php 
			$affiliations = $data->memberships->membership;
			$count = count($affiliations);
			foreach($affiliations as $org) { 
			$count--;
			?>
			<li class="affiliation vcard">
				<a class="url fn org" href="<?php echo $org->organization->url ?>"><?php echo trim($org->organization) ?></a><?php if ($count > 0) echo ', ' ?>
			</li>
			<?php } ?>
		</ul>
	</div>

	<div id="references" class="row">
		<?php 
		$referees = $data->referees->referee;
		if (isset($referees)) { ?>
		<h2>References</h2>
		<ol class="references">
			<?php foreach ($referees as $person) { ?>
			<li class="vcard">
				<div class="col-md-6">
					<h3 class="fn n"><?php echo $person->name->firstname . ' ' . $person->name->surname ?></h3>
					<span class="position"><?php echo $person->title ?></span><br />
					<span class="org"><?php echo $person->organization ?></span><br />
					<span class="adr">
						<span class="street-address"><?php echo $person->address->street ?></span>,
						<span class="locality"><?php echo $person->address->city ?></span>, <span class="region"><?php echo $person->address->state ?></span> <span class="postal-code"><?php echo $person->address->postalCode ?> </span>
					</span><br />
					Phone: <span class="tel"><?php echo $person->contact->phone ?></span>
				</div>
			</li>
			<?php } ?>
		</ol>
		<?php } ?>
		<br class="clear" />
	</div>

	<div class="copyright">
		&copy;<?php echo date('Y') ?> <a href="<?php echo $data->header->contact->url ?>"><?php echo $name ?></a>. <?php echo $data->copyright->legalnotice->para ?><br />
	<br />
	<ul class="list-inline"> 
  	<li> 
  		This page uses: 
  		<ul class="list-inline"> 
  			<li class="vcard"><a class="org fn url" href="http://microformats.org/" title="Microformats">Microformats</a> <img src="icon-hresume.png" alt="Using hResume" /></li> 
  		</ul> 
  	</li> 
  	<li> 
  		This page is valid: 
  		<ul class="list-inline"> 
  			<li><abbr title="HyperText Markup Language"><a href="http://validator.w3.org/check?uri=referer" title="HyperText Markup Language">HTML</a></abbr> <img src="icon-valid-html.png" alt="Valid HTML" /></li> 
  			<li><abbr title="Cascading Style Sheets"><a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3" title="Cascading Style Sheets">CSS</a></abbr> <img src="icon-valid-css.png" alt="Valid CSS" /></li> 
  		</ul> 
  	</li> 
  	<li> 
  		This page conforms to: 
  		<ul class="list-inline"> 
  			<li><abbr title="Web Accessibility Initiative, Triple A validated"><a href="http://www.contentquality.com/mynewtester/cynthia.exe?rptmode=2&amp;url1=http://ipeevski.com/" title="Web Accessibility Initiative, Triple A validated">WAI-AAA</a></abbr> <img src="icon-checkmark.png" alt="WAI-AAA Accessible" /></li> 
  		</ul> 
  	</li>
  </ul>
	</div>
</div>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	//<!--
	$(document).ready(function() {
		// Load links in new windows
		$('a[href^=http]').attr('target', '_blank');
		
		// Show/Hide menu
		$('#menu').hover(function() {
			$('#refs').slideDown();
		}, function() {
			$('#refs').slideUp();
		});
	});
	//-->
	</script>
</body>
</html>
