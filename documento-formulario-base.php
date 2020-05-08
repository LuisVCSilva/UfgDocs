 <tr>
                <td>Nome</td>
                <td><input class="form-control" type="text" name="nome" value="<?=$documento['nome']?>"/></td>
            </tr>

            <tr>
                <td>Assunto</td>
                <td><input class="form-control" type="text" name="assunto" value="<?=$documento['assunto']?>"/></td>
            </tr>


            <tr>
                <td>Descrição</td>
                <td><textarea class="form-control" name="descricao"><?=$documento['descricao']?></textarea></td>
            </tr>

        
                <td>Setor</td>
                <td>
                    <select name="setor_id" class="form-control">
                        <?php foreach ($setor as $setores) : 
                            $esseEhOSetor = $documento['setor_id'] == $setores['id'];
                            $selecao = $esseEhOSetor ? "selected='selected'" : "";
                            ?>
                            <option class="option" value="<?=$setores['id']?>" <?=$selecao?>>
                                <?=$setores['nome']?><br/>
                            </option>
                        <?php endforeach ?>
						<?php
            $geral = $documento['geral'] ? "checked='checked'" : "";
            ?>

            <tr>
                <td></td>
                <td><input type="checkbox" name="geral" <?=$geral?> value="true">Geral</td>
            </tr>

            <tr>
                    </select>
                </td>
            </tr>