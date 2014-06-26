

<h1>Welcome!!!</i></h1>

<div class="form">
    <?php echo CHtml::beginForm(); ?>

    <?php $model = new LoginForm();
    echo CHtml::errorSummary($model); ?>

    <div class="row">
        <?php echo CHtml::activeLabel($model,'username'); ?>
        <?php echo CHtml::activeTextField($model,'username'); ?>
    </div>

    <div class="row">
        <?php echo CHtml::activeLabel($model,'password'); ?>
        <?php echo CHtml::activePasswordField($model,'password'); ?>
    </div>

    <div class="row rememberMe">
        <?php echo CHtml::activeCheckBox($model,'rememberMe'); ?>
        <?php echo CHtml::activeLabel($model,'rememberMe'); ?>
    </div>
    <a>Регистрация<code><?php $this->redirect(array('protected/views/registration'))?></code></a>

    <div class="row submit">
        <?php echo CHtml::submitButton('Войти'); ?>
    </div>

    <?php echo CHtml::endForm(); ?>
</div><!-- form -->

<ul>
    <li>Привет</li>
    <li>Hello</li>
    <li><code><?php echo 'Это тест' ?></code></li>
</ul>
