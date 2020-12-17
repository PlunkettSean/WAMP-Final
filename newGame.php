<style>
    h1 {text-align: center;}
    div {text-align: center;}
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<h1>Add Game</h1>



<div class="container-fluid">
    <br><br>
    <div class="container rounded bg-secondary">
        <form action="/final_project/insertNewGame" method="POST">
            <br>
            <input type="hidden" name="authenticity_token" value="<%= form_authenticity_token %>">
            <div class="form-group">
                <label for="title"><b>Game Title</b></label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter Game Title">
            </div>
            <br>
            <div class="form-group">
                <label for="releaseDate"><b>Release Date</b></label>
                <input type="date" class="form-control" name="releaseDate" id="releaseDate">
            </div>
            <br>
            <input type="submit" class="btn btn-success" name="Create">
        </form>
        <br>
    </div>
</div>