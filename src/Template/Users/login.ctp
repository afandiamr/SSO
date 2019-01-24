<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User 'User'
 */
?>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <section id="wrapper" class="login-register">
        <div class="login-box login-sidebar">
            <div class="white-box">
                <?= $this->Form->create('User', ['class' => 'form-horizontal form-material']) ?>
                <a href="javascript:void(0)" class="text-center db">
                    <?php  echo $this->Html->image('ict-logo.png', ['alt' => 'ict-logo','style'=>' height:60px;']); ?>
                <div class="form-group m-t-40">
                    <div class="col-xs-12">
                        <?= $this->Form->control('username',['label'=>false,'placeholder' => 'Username','required' => '','class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <?= $this->Form->control('password',['label'=>false,'placeholder' => 'Password','required' => '','class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="checkbox checkbox-primary pull-left p-t-0">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup"> Remember me </label>
                        </div>
                        <a href="<?= $this->request->getAttribute("webroot").'forgetPassword' ?>" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot password?</a> </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </section>
</body>