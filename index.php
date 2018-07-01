<!-- Start of the HTML Code -->
<!doctype html>
<html lang="en">
<head>
  <title>Flixnet - Watch your favorite TV Shows</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <main>
    <header>
      <nav>
        <a class="navbar-brand" href="#">Flixnet</a>
        <ul class="navbar-nav">
          <li>
            <a href="#">Popular</a>
          </li>
          <li>
            <a href="#">Movies</a>
          </li>
          <li>
            <a href="#">Shows</a>
          </li>
        </ul>
      </nav>
      <aside class="account">
        <img src="assets/img/thyrion.png">
        <a href="#">Thyrion</a>
      </aside>
    </header>

    <!-- Jumbotron part with the big picture -->

    <div class="jumbotron">
      <h1>Winter is coming</h1>
      <p>Haec et huius modi quaedam innumerabilia ultrix facinorum impiorum bonorumque praemiatrix aliquotiens operatur Adrastia atque utinam semper quam vocabulo duplici etiam Nemesim appellamus. Haec et huius modi quaedam innumerabilia ultrix facinorum impiorum bonorumque praemiatrix aliquotiens operatur Adrastia atque utinam semper quam vocabulo duplici etiam Nemesim appellamus.</p>
      <a href="#" class="button">Watch the new episode</a>
    </div>

    <article class="row">

      <section>
        <img src="assets/img/got.jpg">
      </section>

      <section>
        <img src="assets/img/stranger_things.jpg">
      </section>

      <section>
        <img src="assets/img/mr_robot.jpg">
      </section>

      <section>
        <img src="assets/img/house_cards.jpg">
      </section>

      <section>
        <img src="assets/img/mindhunter.jpg">
      </section>
    </article>

    <!-- Search section -->

    <article class="row search-row">
      <section class="one_col">
        <h2>Look for a TV Show</h2>

        <!-- The form starts here -->
        <form method="post">
          <input class="search" name="query" type="text" placeholder="Search..">
          <input class="button" type="submit" value="Go">
        </form>

        <!-- Results of the search query. Reads data from the API -->

        <h2>Looking for : </h2>

      </section>
    </article>

  </main>

</body>
</html>
