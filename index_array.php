<?php
// hCard
$data['name'] = 'Ivan Peevski';
$data['address']['street'] = '12/377 Angas St ';
$data['address']['city'] = 'Adelaide';
$data['address']['state'] = '<abbr title="South Australia">SA</abbr>';
$data['address']['postcode'] = '5000';
$data['phone'] = '+61 4 03 777 964';
$data['email'] = 'ipeevski@gmail.com';
$data['url'] = 'http://nonehost.com/';

$jobs = array(
	array(
		'company' => 'East Coast Publications',
		'position' => 'CTO',
		'start_date' => strtotime('2007-08-10'),
		'end_date' => strtotime('2009-07-10'),
		'url' => 'http://nerej.com/',
		'description' => 'CTO',
		'achievements' => array(
			'<a href="http://nerej.com/">nerej</a> - New England Real Estate Journal',
			'<a href="http://nyrej.com/">nyrej</a> - New York Real Estate Journal',
			'cremunity'),
	),
	array(
		'company' => 'Australian Medicines Handbook',
		'position' => 'Programmer',
		'start_date' => strtotime('2006-08-01'),
		'end_date' => strtotime('2007-06-01'),
		'url' => 'http://amh.com.au/',
		'description' => '',
		'achievements' => array('pAMH - Palm based book'),
	),
	array(
		'company' => 'National Centre for Vocational Education and Training',
		'position' => 'Programmer',
		'start_date' => strtotime('2005-08-01'),
		'end_date' => strtotime('2006-08-01'),
		'url' => 'http://amh.com.au/',
		'description' => '',
		'achievements' => array('<a href="http://voced.edu.au/">VOCED</a> - Search Engine for Vocational Education publications'),
	),
	array(
		'company' => 'University of South Australia',
		'position' => 'Researcher',
		'start_date' => strtotime('2003-06-01'),
		'end_date' => strtotime('2003-09-01'),
		'url' => 'http://unisa.edu.au/',
		'description' => '',
		'achievements' => array('Research Project: Ontology-based Artificial Intelligence Assistant Agent'),
	)
);

$edu = array(
	array(
		'school' => 'University of South Australia',
		'degree' => 'MBIA (1st Class Honours) - Bachelor of Information Technology (Computing &amp; Multimedia) 2005',
		'start_date' => strtotime('2001-03-10'),
		'end_date' => strtotime('2005-07-01'),
		'url' =>  'http://unisa.com.au/',
		'description' => '',
	),
	array(
		'school' => 'DeVry Institute of Technology (USA)',
		'degree' => 'CET - Computer Engineering Technology',
		'start_date' => strtotime('2000-08-01'),
		'end_date' => strtotime('2001-03-01'),
		'url' => 'http://devry.edu/',
		'description' => '',
	)
);

$awards = array(
	array(
		'start_date' => strtotime('2001-03-15'),
		'end_date' => strtotime('2004-08-01'),
		'name' => 'Chancellor\'s Letters of Commendation (UniSA)',
		'url' => 'http://unisa.edu.au/'
	),
	array(
		'start_date' => strtotime('2001-08-01'),
		'end_date' => strtotime('2002-08-01'),
		'name' => 'Undergraduate Scholarship for Academic Excellence (UniSA)',
		'url' => 'http://unisa.edu.au/'
	),
	array(
		'start_date' => strtotime('2000-08-30'),
		'end_date' => strtotime('2001-03-01'),
		'name' => 'Dean\'s List (DeVry)',
		'url' => 'http://devry.edu/'
	),
	array(
		'start_date' => strtotime('2000-06-30'),
		'name' => 'Cum Laude Society (Kimball Union Academy)',
		'url' => ''
	),
	array(
		'start_date' => strtotime('1999-09-01'),
		'end_date' => strtotime('2000-06-30'),
		'name' => 'High Honour Roll and Effort Honour Roll (Kimball Union Academy)',
		'url' => 'http://kua.org/'
	),
	array(
		'start_date' => strtotime('1999-09-01'),
		'end_date' => strtotime('2000-06-30'),
		'name' => 'Full Academic Scholarship (Kimball Union Academy)',
		'url' => 'http://kua.org/'
	),
);

$skills = array(
	'Web Development' => array(
		'Server Side' => array('PHP', 'JSP', 'ColdFussion', 'ASP.NET'),
		'Client Side' => array('<abbr title="(Extensible) HyperText Markup Language">(X)HTML</abbr>', '<abbr title="Extensible Markup Language">XML</abbr>', 'JavaScript', '<abbr title="Cascading Style Sheets">CSS</abbr>', 'Flash', 'Shockwave', 'Java Applets'),
	),
	// Web Services - SOAP, XML-RPC, REST, JSON
	// PHP Frameworks - Zend Framework, drupal, ExponentCMS, dotProject, 
	'Software development' => array('Java', 'C/C++/C#', 'SQL', 'Lisp', 'CycL', 'Pascal'),
	'Databases' => array('MySQL', 'Oracle', 'MSSQL', 'Microsoft Access', 'Database Abstraction Layers' => array('ODBC', 'AdoDB')),
	'System Administration' => array('Linux (Gentoo/Ubuntu/CentOS/RedHat EL/OpenSUSE)', 'Windows (NT/XP/SBS)', 'FreeBSD'),
	'Network Administration' => array(
		'HTTP' => array('Apache', 'Squid', 'Microsoft IIS'),
		'FTP' => array('vsftp', 'pure-ftp'),
		'Mail' => array('qmail', 'postfix', 'dovecot'),
		'Version control' => array('GIT', 'Subversion', 'CVS'),
		'Setting up and administaring Unix and NT based Local Area Networks'
	),
	'Project Management' => array('dotProject', 'tasks'),
	'Scripting' => array('Shell scripting', 'Make', 'Ant', 'PHP', 'Perl', 'mIRC'),
	'Graphic Design' => array('Flash', 'Director', 'Photoshop', 'Illustrator', 'InDesign', '3D Studio Max'),
	'Social Skills' => array('Excellent Research Abilities', 'Superb Group work and Leadership'),
);

$affiliations = array(
	array(
		'name' => 'South Australia Lanning Association (<abbr>SALA</abbr>)',
		'url' => 'http://sala.org/'
	)
);

$referees = array(
	array(
		'name' => 'Graham Kimber',
		'position' => 'General Manager',
		'company' => 'Kimber Project Management',
		'address' => array(
			'street' => '25 Alfred St',
			'city' => 'Norwell', 
			'state' => 'SA',
			'postcode' => '5067'),
		'phone' => '+61 4 1200 6886'
	),
	array(
		'name' => 'Roland Hopkins',
		'position' => 'Owner',
		'company' => 'East Coast Publications',
		'address' => array(
			'street' => '57 Washington St',
			'city' => 'Norwell',
			'state' => 'MA',
			'postcode' => '02061'
		),
		'phone' => '+1 781 878 4540'
	)
//	array(
//		'name' => 'Laz Davila',
//		'position' => 'Owner',
//		'company' => 'Davtec'
//	)
);

//$xml = simplexml_load_file('cv.xml');
////var_dump($xml);
//$jobs = $xml->history;
//var_dump((array) $jobs);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title><?= $data['name'] ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="author" content="<?= $data['name'] ?>" />
	<meta name="copyright" content="&copy; copyright <?= date('Y') ?> by <?= $data['name'] ?>. All rights reserved." />
	<link rel="stylesheet" type="text/css" href="resume.css" />
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />
</head>
<body class="hresume">
	<h1><?= $data['name'] ?></h1>
	<div class="floater">
	<address class="contact vcard">
		<span id="name" class="fn n"><?= $data['name'] ?></span><br />
		<span class="adr">
			<span class="street-address"><?= $data['address']['street'] ?></span>
			<span class="locality"><?= $data['address']['city'] ?></span>, <span class="region"><?= $data['address']['state'] ?></span> <span class="postal-code"><?= $data['address']['postcode'] ?></span>
		</span><br />
		<a class="email" href="mailto:<?= $data['email'] ?>"><?= $data['email'] ?></a><br />
		<span class="tel"><?= $data['phone'] ?></span><br />
		<a class="url" href="<?= $data['url'] ?>"><?= $data['url'] ?></a>
	</address>
	</div>

	<div class="block">
		<h2 id="sum">Summary of Qualifications</h2>
		<ul class="quals">
			<li>Manager and Technical Leader (2 years). Led a team of five.</li>
			<li>Experienced software architect, designer &amp; engineer (15 years). Shipped numerous products.</li>
			<li>PHP Developer</li>
		</ul>
	</div>

	<div id="experience" class="compexps block">
		<h2>Experience</h2>
		<ul>
			<?php foreach ($skills as $skill_name => $skillset) { ?>
			<li><?= $skill_name ?> - 
				<ul>
				<?php 
				foreach ($skillset as $key => $skill) { 
					if (is_array($skill)) { 
						$last_item = end($skill);
				?>
				<?= $key ?>
				<li>(<ul>
					<?php foreach($skill as $subskill) { ?>
					<li><a class="skill" rel="tag"><?= $subskill ?></a><?= $last_item == $subskill ? '' : ',' ?></li>
			<?php } ?>
				</ul>);
				</li>
			<?php	} else { 
				$last_item = end($skillset); ?>
					<li><a class="skill" rel="tag"><?= $skill ?></a><?= $last_item  == $skill ? '' : ',' ?></li>
			<?php } } ?>
				</ul>
			</li>
			<?php } ?>
		</ul>
	</div>

	<div class="block">
	<h2 id="work">Employment &amp; Products</h2>
	<ol class="vcalendar">
		<?php foreach ($jobs as $job) { ?>
		<li class="job experience vevent vcard">
			<a href="#name" class="include"></a>
			<h3>
				<span class="dates">
					<abbr class="dtstart" title="<?= date('Y-m-d', $job['start_date']) ?>"><?= date('Y M', $job['start_date']) ?></abbr> - 
					<abbr class="dtend" title="<?= date('Y-m-d', $job['end_date']) ?>"><?= date('Y M', $job['end_date']) ?></abbr>
				</span>
				<a class="org company location url" href="<?= $job['url'] ?>"><?= $job['company'] ?></a>
			</h3>
			<h4 class="jobtitle summary title"><?= $job['position'] ?></h4>
			<p class="description"><?= $job['description'] ?></p>
			<div class="completed">
				<h5>Achievements</h5>
				<ul>
				<?php foreach ($job['achievements'] as $achievement) { ?>
					<li><?= $achievement ?></li>
				<?php } ?>
				</ul>
			</div>
		</li>
		<?php } ?>
	</ol>
	</div>

	<div class="vcalendar block">
		<h2 id="education">Education</h2>
		<ol>
			<?php foreach($edu as $school) { ?>
			<li class="education vevent school">
				<h3>
					<span class="dates">
						<abbr class="dtstart" title="<?= date('Y-m-d', $school['start_date']) ?>"><?= date('Y M', $job['start_date']) ?></abbr> - 
						<abbr class="dtend" title="<?= date('Y-m-d', $school['end_date']) ?>"><?= date('Y M', $job['end_date']) ?></abbr>
					</span>
					<a class="institution url summary" href="<?= $school['url'] ?>"><?= $school['school'] ?></a>
				</h3>
				<ol class="degrees">
					<li><?= $school['degree'] ?></li>
				</ol>
				<p><?= $school['description'] ?></p>
			</li>
			<?php } ?>
		</ol>
	</div>

	<div id="awards" class="awards block">
		<h2>Awards</h2>
		<ol>
			<?php foreach ($awards as $award) { ?>
			<li class="vevent">
				<span class="dates">
					<abbr class="dtstart" title="<?= date('Y-m-d', $award['start_date']) ?>"><?= date('Y', $award['start_date']) ?></abbr>
					<?= !empty($award['end_date']) ? ' - <abbr class="dtend" title="'.date('Y-m-d', $award['end_date']).'">' . date('Y', $award['end_date']) . '</abbr>' : '' ?>
				</span>
				<a class="url summary" href="<?= $award['url'] ?>"><?= $award['name'] ?></a>
			</li>
			<?php } ?>
		</ol>
	</div>

	<div class="interests block">
		<h2>Other Interests</h2>
		<ul>
			<li>Reading books.</li>
			<li>Blogging.</li>
			<li>Cafes inspire philosophical ponderings, or sociological analyses, often realtime and interactive.</li>
		</ul>
		<h2>Member of</h2>
		<ul>
			<?php 
			$count = count($affiliations);
			foreach($affiliations as $org) { 
			$count--;
			?>
			<li class="affiliation vcard">
				<a class="url fn org" href="<?= $org['url'] ?>"><?= $org['name'] ?></a><?php if ($count > 0) echo ',' ?>
			</li>
			<?php } ?>
		</ul>
	</div>

	<div id="references" class="block">
		<?php if (isset($referees)) { ?>
		<h2>References</h2>
		<ol class="references">
			<?php foreach ($referees as $person) { ?>
			<li class="vcard">
				<h3 class="fn n"><?= $person['name'] ?></h3>
				<span class="position"><?= $person['position'] ?></span><br />
				<span class="org"><?= $person['company'] ?></span><br />
				<span class="adr">
					<span class="street-address"><?= $person['address']['street'] ?></span>,
					<span class="locality"><?= $person['address']['city'] ?></span>, <span class="region"><?= $person['address']['state'] ?></span> <span class="postal-code"><?= $person['address']['postcode'] ?> </span>
				</span><br />
				Phone: <span class="tel"><?= $person['phone'] ?></span>
			</li>
			<?php } ?>
		</ol>
		<?php } else { ?>
		<h2>References available upon request.</h2>
		<?php } ?>
		<br class="clear" />
	</div>

	<div class="copyright">
		&copy;<?= date('Y') ?> <a target="_top" href="<?= $data['url'] ?>"><?= $data['name'] ?></a>. All Rights Reserved.<br />
	<br />
	<a href="http://validator.w3.org/check?uri=referer">
		<img src="http://www.w3.org/Icons/valid-xhtml11-blue" alt="Valid XHTML 1.1" />
	</a>
	</div>


	<div id="menu"
		onmouseover="document.getElementById('refs').style.display = 'block'"
		onmouseout="document.getElementById('refs').style.display = 'none'">
		menu
		<div id="refs">
			<a href="#top">Top</a><br />
			<a href="#sum">Summary</a><br />
			<a href="#experience"">Experience</a><br />
			<a href="#work"">Work</a><br />
			<a href="#education">Education</a><br />
			<a href="#awards">Awards</a><br />
		</div>
	</div>
</body>
</html>