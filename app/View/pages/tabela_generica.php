<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title"><?=$data['title']?></h4>
                                    <p class="card-category"><?=$data['description']?></p> 
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <?php foreach(array_keys($data['dados_tabela'][0]) as $key){?>
                                                <th><?=$key?></th>
                                            <?php }?> 
                                        </thead>
                                        <tbody>
                                            <?php foreach(array_keys($data['dados_tabela']) as $key){?>
                                                <tr>
                                                    <?php foreach(array_keys($data['dados_tabela'][0]) as $k){?>
                                                        <td><?=$data['dados_tabela'][$key][$k]?></td>
                                                    <?php }?>
                                                </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
