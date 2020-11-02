<?php
require_once __DIR__.'/vendor/autoload.php';
$rss = Feed::loadRss('https://www.crunchyroll.com/love-live-nijigasaki-high-school-idol-club.rss');
?>
<html>
<head>
<title>Love Live! Nijigasaki High School Idol Club | Lontong</title>
<link rel="stylesheet" href="https://lontong.unblock.my.id/assets/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://lontong.unblock.my.id/assets/js/jquery-3.5.1.slim.min.js "></script>
<script src="https://lontong.unblock.my.id/assets/js/popper.min.js"></script>
<script src="https://lontong.unblock.my.id/assets/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="https://lontong.unblock.my.id/assets/favicon.png" type="image/x-icon">
<link rel="icon" href="https://lontong.unblock.my.id/assets/favicon.png" type="image/x-icon">
<meta property="og:site_name" content="Lontong"/>
<meta property="og:type" content="tv_show"/>
<meta property="og:image" content="https://img1.ak.crunchyroll.com/i/spire2/6ac24e2ad3629477e513da8225357f671601689746_thumb.jpg"/>
<meta name="title" property="og:title" content="Love Live! Nijigasaki High School Idol Club | Lontong">
<meta name="description" property="og:description" content="Nijigasaki High School is known for their diverse subjects and the freedom they give to students. Second-year student Yu Takasaki has been turned on to the charms of school idols, so she knocks on the door of the School Idol Club with her friend, Ayumu Uehara. Sometimes friends, sometimes rivals, the members of this club each contribute their own thoughts and motivations to the group. | Lontong">
</head>
<body style="background-color: #1b1b1c">
<div class="container">
<div class="row">
            <div class="col-md-8">
                <div class="card text-white" style="box-shadow: 5px 0 9px -5px rgba(0,0,0,0.21);background-color: #323233">
                    <div class="card-header" style="background-color: #000">
                        <h5>Latest episodes</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
<?php
foreach ($rss->item as $item) {
    $data  = @json_decode(file_get_contents('https://apicr.vercel.app/?id='.$item->{'crunchyroll:mediaId'}), true);
    $thumb = $data['thumbnail']['url'];
    echo '<div class="col-md-4" style="margin-bottom: 10px;">';
    echo '<a href="/watch/'.$item->{'crunchyroll:mediaId'}.'" style="text-decoration: none;">';
    echo '<div class="card" style="padding: 10px; background-color: #1b1b1c">';
    echo '<img class="card-img-top" height="90" src="'.$thumb.'" alt="'.$item->title.'">';
    echo '<div class="card-body"><p class="text-white" style="font-weight: bold">';
    echo '<small>'.$item->pubDate.'</small><br>';
    echo $item->title;
	echo '</div></div></a></div>';
}
?>
</div>
                    </div>
                </div>
            </div>
<div class="col-md-4">
                <div class="card text-white" style="box-shadow: 5px 0 9px -5px rgba(0,0,0,0.21);background-color: #323233">
                    <div class="card-header" style="background-color: #000">
                        <img src="https://img1.ak.crunchyroll.com/i/spire2/6ac24e2ad3629477e513da8225357f671601689746_full.jpg" style="width: 298px;">
                        <hr>
                        <h3>Love Live! Nijigasaki High School Idol Club</h3>
                        <span class="badge badge-primary">Music</span> <span class="badge badge-primary">Idols</span>
                        <p class="overflow-hidden text-truncate">Nijigasaki High School is known for their diverse subjects and the freedom they give to students. Second-year student Yu Takasaki has been turned on to the charms of school idols, so she knocks on the door of the School Idol Club with her friend, Ayumu Uehara. Sometimes friends, sometimes rivals, the members of this club each contribute their own thoughts and motivations to the group.</p>
                    </p>	
                </div>
</div>
</body>
</html>
