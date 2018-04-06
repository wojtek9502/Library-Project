<?php

$search = htmlspecialchars($_GET['search']);
$search_filter = htmlspecialchars($_GET['search_filter']);
// echo $search;
// echo $search_filter;


switch ($search_filter) {
  case 'author':
  {
    $query = "SELECT book.title, book.author, book.publish_year, book.category, book.pages, copy.id, copy.status
              FROM book
              INNER JOIN copy ON book.id = copy.book_id
              WHERE book.author LIKE '%{$search}%'";
  }break;

  case 'title':
  {
    $query = "SELECT book.title, book.author, book.publish_year, book.category, book.pages, copy.id, copy.status
              FROM book
              INNER JOIN copy ON book.id = copy.book_id
              WHERE book.title LIKE '%{$search}%'";
  }break;


  default:
  {
    $query = "SELECT book.title, book.author, book.publish_year, book.category, book.pages, copy.id, copy.status
              FROM book
              INNER JOIN copy ON book.id = copy.book_id
              WHERE book.author LIKE '%{$search}%' OR book.title LIKE '%{$search}%'";
  }break;
}

include "/templ_scripts/connect.php";
include '/templ_scripts/before_content_template.php';


echo '
        <!--CONTENT-->
        <div class="span10">
            <div class="hero-unit text-center">
                <h2>Katalog</h2>
                <br>
                <form class="form-inline" action="catalog_search.php" method="GET">
                      <label class="mr-sm-2" for="search_label">Wyszukaj</label>
                      <input type="text" id="search_label" name="search" required="">

                      <label class="mr-sm-2" for="search_select">Szukaj po</label>
                       <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="search_filter" id="search_filter">
                         <option selected value="all">Wszystko</option>
                         <option value="author">Autor</option>
                         <option value="title">Tutuł</option>
                       </select>

                      <button type="submit" class="btn btn-primary">Szukaj</button>
                </form>



                <h6>Kliknij na nagłówek kolumny aby posortować.</h6>
                    <table class="table table-striped sortable text-center">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tytuł</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Data wydania (RRRR-MM-DD)</th>
                            <th scope="col">Kategoria</th>
                            <th scope="col">Liczba stron</th>
                            <th scope="col">Nr. egzemplarza</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>

        ';
                $row_nr=0;
                $result = mysql_query($query);
                if(!$result) echo 'BLAD zapytania katalogu z bazy!';
                  else
                  {
                        while($row = mysql_fetch_row($result))
                        {
                          $row_nr++;
                          echo '<tr>';
                          echo '<th scope="row">'.$row_nr.'</th>';
                          echo '<td>'.$row[0].'</td>';
                          echo '<td>'.$row[1].'</td>';
                          echo '<td>'.$row[2].'</td>';
                          echo '<td>'.$row[3].'</td>';
                          echo '<td>'.$row[4].'</td>';
                          echo '<td>'.$row[5].'</td>';
                          echo '<td>'.$row[6].'</td>';
                        };
                  } #else end

        echo '
                    </tbody>
                    </table>
              </div>
            </div>
';


include '/templ_scripts/after_content_template.php';
mysql_close($id_conn);

?>
