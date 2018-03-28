<div class="cotainer">
    <h3><?php echo $title; ?></h3>
    <?php echo validation_errors(); ?>
    <?php echo form_open('cadastro/cliente'); ?>
        <div class="row">
            <h5>Dados do Cliente</h5>
            <div class="row">
                <div class="input-field col s12 m6 l6">
                    <input placeholder="Ex: José Augusto Roberto" id="txtNome" name="txtNome" type="text" class="validate">
                    <label for="txtNome">Nome Completo</label>
                </div>
                <div class="input-field col s12 m6 l2">
                    <input id="txtData" type="text" class="datepicker">
                    <label for="txtData">Data de Nascimento</label>
                </div>
                <div class="input-field col s12 m6 l2">
                    <select>
                        <option value="" >Selecione...</option>
                        <option value="1">Masculino</option>
                        <option value="2">Feminino</option>
                    </select>
                    <label for="last_name">Gênero</label>
                </div>
                <div class="input-field col s12 m6 l2">
                    <select>
                        <option value="">Selecione...</option>
                        <option value="2">Casado(a)</option>
                        <option value="3">Divorciado(a)</option>
                        <option value="1">Solteiro(a)</option>
				        <option value="4">Viúvo(a)</option>
                    </select>
                    <label>Estado Civil</label>
                </div>
                <div class="input-field col s12 m6 l3">
                    <input id="txtCPF" name="txtCPF" type="text" class="validate">
                    <label for="txtCPF">CPF</label>
                </div>
                <div class="input-field col s12 m6 l3">
                    <input id="txtRG" name="txtRG" type="text" class="validate">
                    <label for="txtRG">RG</label>
                </div>       
            </div>
        </div>
        <!-- <div class="row">
            <h5>Endereço</h5>
            <div class="row">
                <div class="input-field col s2">
                    <input placeholder="Placeholder" id="" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input placeholder="Placeholder" id="" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s2">
                    <input placeholder="Placeholder" id="" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s2">
                    <input placeholder="Placeholder" id="" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s3">
                    <input placeholder="Placeholder" id="" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s3">
                    <input placeholder="Placeholder" id="" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
            </div>
        </div>
        <div class="row">
            <h5>Outros</h5>
            <div class="row">
                <div class="input-field col s2">
                    <input placeholder="Placeholder" id="" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s2">
                    <input placeholder="Placeholder" id="" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s2">
                    <input placeholder="Placeholder" id="" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input placeholder="Placeholder" id="" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s3">
                    <input placeholder="Placeholder" id="" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s3">
                    <input placeholder="Placeholder" id="" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
            </div>
        </div>
        <div class="row">
            <h5>Observação</h5>
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Placeholder" id="" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
            </div>
        </div> -->
        <input type="submit" name="submit" value="Salvar" />
    </form>
</div>    