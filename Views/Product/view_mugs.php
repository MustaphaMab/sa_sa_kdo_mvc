<div class="container">
        <header>
            <center><h1>MUGS</h1></center>
            <br>
        </header>
        <div class="row">
            <?php foreach ($mugs as $m) : ?>
                <div class="col-md-3">
                    <div class="card mb-4">
                        
                    
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($m->name) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($m->description) ?></p>
                            <p class="card-text"><strong><?= htmlspecialchars($m->price) ?>€</strong></p>
                        
                          
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

