<?php
  require_once "config/connect.php";
  require_once "config/session.php";

  require_once "fn/db.php";

  require "include/header.php";
  require "include/nav.php";
  require "include/navmod.php";
?>

<script> document.title = "Cryptex | FAQ" </script>
<style>
  a:hover {
    text-decoration: none;
  }
</style>

<div class="container">
<div class="row col-sm-10 col-sm-offset-1">
  <div class="row">
    <h3>Some frequently asked questions.</h3>
    <ul>
      <li><h4><a href="#what">What is Cryptex exactly?</a></h4></li>
      <li><h4><a href="#hard">What's the level of difficulty generally like?</a></h4></li>
      <li><h4><a href="#wait">Wait a moment! How many people ask these questions? Is this even 'Frequently' asked questions?</a></h4></li>
      <li><h4><a href="#rules">So, what are the rules around here?</a></h4></li>
      <li><h4><a href="#levels">How many levels does Cryptex have?</a></h4></li>
      <li><h4><a href="#leaders">How does the leaderboard function? How are people with same points ranked?</a></h4></li>
      <li><h4><a href="#reason">Why exactly should I play this game again?</a></h4></li>
    </ul>
    <br>
  </div>

  <div class="row">
    <h3><a name="what"></a>What is Cryptex exactly?</h3>
    <p>
    Well, in essence, Cryptex is an online treasure hunt/hacking event.
    Kind of like your ordinary treasure hunt, only, you have to find the clues and the answer online. (Duh!)
    The 'hacking event' part comes into play because the clues and answers won't be visible to the naked eye without digging
    around in some code, or manipulating some web page, or figuring out some programming...
    This was made by bored students who wanted to waste time and make something interesting along the way.
    There is a focus on learning in this version of Cryptex as well. We hope you enjoy playing it as much as we did creating it!
    </p>

    <h3><a name="hard"></a>What's the level of difficulty generally like?</h3>
    <p>
    Since learning was a dominant theme in this edition of Cryptex, and we really want people to like our game instead of quitting halfway though,
    we made a game that teaches the user initially, and then picks up the difficulty as the user progresses.
    Also, seeing that this is an online treasure hunt, you have the vast knowledge of the internet at your disposal.
    Added to that, there are hints in the first five levels.
    So, we don't think you should be too bothered about difficulty just yet.
    </p>

    <h3><a name="wait"></a>Wait a moment! How many people ask these questions? Is this even 'Frequently' asked questions?</h3>
    <p>
    Okay, you caught us. These aren't really Frequently Asked Questions. They can't possibly be, when you consider that this page was up before the event
    even started. But hey, we were on a deadline. The original idea was to ask people to ask us questions about the event, but we were too busy coding
    and forgot. Oh well, maybe next time.
    </p>

    <h3><a name="rules"></a>So, what are the rules around here?</h3>
    <p>
    Well, the rules are pretty simple. Clear the most levels the fastest, and you win. There are certain points associated with winning a level,
    taking hints, and so on and so forth, but that is boring. So we put all the 'serious' info in a separate Rules page. You can find it <a href="rules.php">here</a>.
    </p>

    <h3><a name="levels"></a>How many levels does Cryptex have?</h3>
    <p>
    Well, we didn't have any idea how many levels would be appropriate, so we decided on a dynamic way of introducing levels, which is just another
    way of saying that we'll keep adding levels as the previous ones get solved. The contest will open with 10 levels, with more added
    as people solve earlier levels. The first five levels will also have hints, but those will cost you points, so use them wisely!
    </p>

    <h3><a name="leaders"></a>How does the leaderboard function? How are people with same points ranked?</h3>
    <p>
    Well, people with more points are higher on the leaderboard, as expected. However, the issue arises when two people have the same points, but joined at different times.
    When such a condition occurs, the person who joined later will get preference, since he had lesser time to think of the same solutions than the other guy.
    However, due to space/readability constraints, only the top 35 people will be featured on the leaderboard.
    </p>

    <h3><a name="reason"></a>Why exactly should I play this game again?</h3>
    <p>
    Well, this question comes last because we were kinda hoping you wouldn't be asking this question. The thing is, we didnt realise that this was a
    potential issue till after we had already written most of the code. So we did the only thing we could to sufficiently answer this question. Cash prizes!
    That's right, there are cash prizes for winning Cryptex. We hope that is incentive enough for you to play. Happy Hacking!
    </p>
  </div>
</div>
</div>


<?php
  require "include/footer.php";
?>
