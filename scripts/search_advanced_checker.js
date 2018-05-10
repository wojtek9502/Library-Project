function search_advanced_checker() {
    var search_by_title = document.getElementById("search_title").value;
    var search_by_author = document.getElementById("search_author").value;
    var search_by_category = document.getElementById("search_category").value;

    if(search_by_title==="" && search_by_author=="" && search_by_category==""){
      document.getElementById("search_button").disabled = true;
    } else {
      document.getElementById("search_button").disabled = false;
    }
}
