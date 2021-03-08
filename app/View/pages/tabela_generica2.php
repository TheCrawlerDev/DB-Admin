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
                                                    <td><button class="btn btn-warning" onclick="kill_process(<?=$data['dados_tabela'][$key]['Id']?>);">Kill</button></td>
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

            <script>
            function kill_process(id){

                $.ajax({
                    type: 'post',
                    url: '<?=BASE_URL?>kill_process',
                    data: {'process':id},
                    success: function () {
                        alert('Parado com sucesso');
                        window.location.reload();
                    }
                });

            }
            </script>
