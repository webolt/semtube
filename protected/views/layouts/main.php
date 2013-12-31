<!DOCTYPE html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Homepage Example - Semantic</title>

  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/homepage.css">

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/semantic.min.js"></script>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.ytChanPlayer.js"></script>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/homepage.js"></script>

</head>
<body id="home">
  <div class="ui inverted page grid masthead segment">
    <div class="column">
      <div class="inverted secondary pointing ui menu">
        <div class="header item">Cat University</div>
        <div class="right menu">
          <div class="ui top right pointing mobile dropdown link item">
            Menu
            <i class="dropdown icon"></i>
            <div class="menu">
              <a class="item">Classes</a>
              <a class="item">Cocktail Hours</a>
              <a class="item">Community</a>
            </div>
          </div>
          <div class="ui dropdown link item">
            Courses
            <i class="dropdown icon"></i>
            <div class="menu">
              <a class="item">Petting</a>
              <a class="item">Feeding</a>
              <a class="item">Mind Reading</a>
            </div>
          </div>
          <a class="item">Library</a>
          <a class="item">Community</a>
        </div>
      </div>
      
      <div class="ui transition">
        <h1 class="ui inverted header">
          Your Cat is Dumb
        </h1>
        <p>At least he won't reach his highest potential unless you enroll him in Cat University's 2013 class.</p>
        <div class="large basic inverted animated fade ui button">
          <div class="visible content">Come to ICU 2013</div>
          <div class="hidden content">Register Now</div>
        </div>
      </div>
      
      <div id="ytChanPlayer" class="ui segment"></div>
      <script type="text/javascript">

		
		$(document).ready(function() {
			$('#ytChanPlayer').ytChanPlayer({
				  username: 'elGawee',
				});
		});
	
      </script>
      
      
    </div>
  </div>
  <div class="ui page grid overview segment">
    <div class="ui two wide column"></div>
    <div class="twelve wide column">
      <div class="ui three column center aligned stackable divided grid">
        <div class="column">
          <div class="ui icon header">
            <i class="circular book link icon"></i>
            Courses 
          </div>
          <p>Take your kitty to a cat-ducation course and learn how to treat her well.</p>
          <p><a class="ui teal right labeled icon button" href="#">Learn <i class="right long arrow icon"></i></a></p>
        </div>
        <div class="column">
          <div class="ui icon header">
            <i class="circular code link icon"></i>
            Library
          </div>
          <p>Dig through our cat library to found out amazing things you can do with your kitty.</p>
          <p><a class="ui teal right labeled icon button" href="#">Research <i class="right long arrow icon"></i></a></p>
        </div>
        <div class="column">
          <div class="ui icon header">
            <i class="circular user link icon"></i>
            Community
          </div>
          <p>Get feedback on your cat from a community of loving pet owners on our online bulletin board system.</p>
          <p><a class="ui teal right labeled icon button" href="#">Share <i class="right long arrow icon"></i></a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="ui inverted page grid stackable relaxed feature segment">
    <div class="row">
      <div class="column">
        <h1 class="center aligned ui header">
          Cat Tips Right In Your Inbox
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="ten wide column">
        <h2 class="ui header">How to Win Your Cats Attention</h2>
        <p>Getting your cat to notice you is a large part of being a pet owner. Although I have a lot of patience for writing things about cats, perhaps this might be enough body copy to make this section of text look filled out.</p>
        <p>This and other tips can be found in our newsletter, amazing right?</p>
        <div class="ui basic inverted animated button button">
          <div class="visible content">Read More</div>
          <div class="hidden content"><i class="right arrow icon"></i></div>
        </div>
        <div class="ui inverted section divider"></div>
        <h3 class="ui header">More articles</h3>
        <div class="ui inverted animated selection list">
          <div class="item">
            How to win in a fight with a cat
            <div class="right floated">Jan 20, 2023</div>
          </div>
          <div class="item">
            A Supposedly Fun Cat Toy I will Never Buy Again
            <div class="right floated">Jan 1, 2023</div>
          </div>
          <div class="item">
            Much ado about yarn
            <div class="right floated">Dec 20, 2022</div>
          </div>
        </div>
      </div>
      <div class="six wide column">
        <div class="ui secondary form segment">
          <h3 class="ui header">Get Our Amazing Newsletter Bi-Daily</h3>
          <p>Sign up and get spammed with cats everyday. We have no unsubscribe button!</p>
          <div class="field">
            <div class="ui left icon action input">
              <i class="user icon"></i>
              <input name="email" type="text" placeholder="name@email.com">
              <div class="ui teal submit button">Sign up</div>
            </div>
          </div>
          <div class="ui error message"></div>
        </div>
      </div>
    </div>
  </div>

  
  <div class="ui inverted teal page grid segment">
    <div class="ten wide column">
      <div class="ui three column stackable grid">
        <div class="column">
          <div class="ui header">Courses</div>
          <div class="ui inverted link list">
            <a class="item">Registration</a>
            <a class="item">Course Calendar</a>
            <a class="item">Professors</a>
          </div>
        </div>
        <div class="column">
          <div class="ui header">Library</div>
          <div class="ui inverted link list">
            <a class="item">A-Z</a>
            <a class="item">Most Popular</a>
            <a class="item">Recently Changed</a>
          </div>
        </div>
        <div class="column">
          <div class="ui header">Community</div>
          <div class="ui inverted link list">
            <a class="item">BBS</a>
            <a class="item">Careers</a>
            <a class="item">Privacy Policy</a>
          </div>
        </div>
      </div>
    </div>
    <div class="six wide right floated aligned column">
      <h3 class="ui header">Contact Us</h3>
      <addr>
        237 Catberry Road <br>
        Milton Keynes, London <br>
      </addr>
      <p>(404) 867-5309</p>
      Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
    </div>
  </div>
</body>

</html>
