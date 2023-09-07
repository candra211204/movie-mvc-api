$(document).ready(function () {
    $('.movie_detail_button').click(function () {
        $.ajax({
            type: "get",
            url: "http://www.omdbapi.com/",
            data: {
                'apikey' : '880341ba',
                'i' : $(this).data('id')
            },
            dataType: "json",
            success: function (response) {
                console.log(response);
                $('#movie_detail').html(`
                    <div class="row">
                        <div class="col-md-5">
                            <img src="` + response.Poster + `" alt="` + response.Title + `" width="200">
                        </div>
                        <div class="col-md-7">
                            <table class="table">
                                <tr>
                                    <th scope="row">Title</th>
                                    <td>` + response.Title + `</td>
                                </tr>
                                <tr>
                                    <th scope="row">Actors</th>
                                    <td>` + response.Actors + `</td>
                                </tr>
                                <tr>
                                    <th scope="row">Country</th>
                                    <td colspan="2">` + response.Country + `</td>
                                </tr>
                                <tr>
                                    <th scope="row">Director</th>
                                    <td colspan="2">` + response.Director + `</td>
                                </tr>
                                <tr>
                                    <th scope="row">Genre</th>
                                    <td colspan="2">` + response.Genre + `</td>
                                </tr>
                                <tr>
                                    <th scope="row">Rating</th>
                                    <td colspan="2">` + response.imdbRating + `</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-12 mt-4">
                        ` + response.Plot + `
                        </div>
                    </div>
                `);
            }
        });
    });
});