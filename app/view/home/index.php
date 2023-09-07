<div class="container my-4">
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="text-center mb-4">Search Movie</h5>
            <div class="row justify-content-center mb-5">
                <div class="col-6">
                    <form action="" method="get">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Movie Title" name="q">
                            <button class="btn btn-dark" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row" id="movie_list">
                <?php if (isset($data['model'])) : ?>
                    <?php foreach ($data['model'] as $data) : ?>
                        <div class="col-4">
                            <div class="card m-2" style="width: 18rem;">
                                <img src="<?= $data['Poster'] ?>" class="card-img-top" alt="<?= $data['Title'] ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $data['Title'] ?></h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data['Year'] ?></h6>
                                    <a href="#" class="card-link movie_detail_button" data-id="<?= $data['imdbID'] ?>" data-bs-toggle="modal" data-bs-target="#movie_detail_modal">Movie Detail</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="movie_detail_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Movie Detail</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="movie_detail">

            </div>
        </div>
    </div>
</div>