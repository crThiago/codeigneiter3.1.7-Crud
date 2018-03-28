<h2><?php echo $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('cadastro/cliente'); ?>
    <div>
        <label>Nome Completo *</label>
        <input type="text" name="" required>
        <label>Data de Nascimento</label>
        <input type="text" name="" required>
        <label>Gênero</label>
        <label>Estado Civil</label>
        <?php echo form_dropdow('Selecionar', $estadoCivil); ?>
        <label>CPF</label>
        <input type="text" name="" required>
        <label>RG</label>
        <input type="text" name="" required>
    </div>
    <input type="submit" name="submit" value="Salvar" />
</form>