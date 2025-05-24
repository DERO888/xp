<?= $this->extend('Layout/Starter') ?>

<?= $this->section('content') ?>
<div class="login-wrapper">
    <div class="login-container">
        <div class="login-box">
            <?= $this->include('Layout/msgStatus') ?>
            
            <div class="neon-border">
                <div class="login-header">
                    <h1 class="glitch" data-text="PRINCE PANEL">PRINCE PANEL</h1>
                    <div class="cyber-line"></div>
                    <h2 class="vip-text">VIP ACCESS</h2>
                </div>

                <div class="login-form">
                    <?= form_open() ?>
                    <div class="form-group">
                        <div class="input-wrapper">
                            <i class="fas fa-user"></i>
                            <input type="text" name="username" id="username" required minlength="4">
                            <label for="username">USERNAME</label>
                            <div class="line"></div>
                        </div>
                        <?php if ($validation->hasError('username')) : ?>
                            <span class="error-message"><?= $validation->getError('username') ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <div class="input-wrapper">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" id="password" required minlength="6">
                            <label for="password">PASSWORD</label>
                            <div class="line"></div>
                            <i class="fas fa-eye toggle-password"></i>
                        </div>
                        <?php if ($validation->hasError('password')) : ?>
                            <span class="error-message"><?= $validation->getError('password') ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group remember-me">
                        <label class="checkbox-container">
                            <input type="checkbox" name="stay_log" id="stay_log" value="yes">
                            <span class="checkmark"></span>
                            Stay Connected
                        </label>
                    </div>

                    <div class="button-group">
                        <button type="submit" class="cyber-button">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            LOGIN
                        </button>
                        
                        <a href="<?= site_url('register') ?>" class="cyber-button register">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            REGISTER
                        </a>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
:root {
    --primary: #0ff;
    --secondary: #f0f;
    --bg-dark: #000;
    --text-light: #fff;
}

body {
    margin: 0;
    padding: 0;
    background: #000;
    font-family: 'Rajdhani', sans-serif;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(45deg, #000, #1a1a1a);
    overflow: hidden;
}

.login-wrapper {
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.login-wrapper::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: repeating-linear-gradient(
        0deg,
        #000 0px,
        #000 2px,
        transparent 2px,
        transparent 4px
    );
    animation: scan 5s linear infinite;
}

.login-container {
    width: 400px;
    position: relative;
    z-index: 1;
}

.login-box {
    background: rgba(0, 0, 0, 0.9);
    padding: 40px;
    border-radius: 10px;
    position: relative;
}

.neon-border {
    position: relative;
    padding: 20px;
}

.neon-border::before,
.neon-border::after {
    content: '';
    position: absolute;
    left: -2px;
    top: -2px;
    background: linear-gradient(45deg, 
        var(--primary), 
        var(--secondary), 
        #ff0000,
        #00ff00,
        var(--primary)
    );
    background-size: 400%;
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    z-index: -1;
    animation: border 20s linear infinite;
}

.neon-border::after {
    filter: blur(20px);
}

.login-header {
    text-align: center;
    margin-bottom: 40px;
}

.glitch {
    color: var(--text-light);
    font-size: 3em;
    font-weight: bold;
    text-transform: uppercase;
    position: relative;
    text-shadow: 0 0 10px var(--primary);
    animation: glitch 2s infinite;
}

.cyber-line {
    width: 100%;
    height: 2px;
    background: var(--primary);
    margin: 20px 0;
    position: relative;
    overflow: hidden;
}

.cyber-line::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: var(--secondary);
    animation: scan-line 2s linear infinite;
}

.vip-text {
    color: var(--text-light);
    font-size: 1.5em;
    text-transform: uppercase;
    letter-spacing: 5px;
    margin: 0;
    animation: flicker 2s infinite;
}

.input-wrapper {
    position: relative;
    margin-bottom: 30px;
}

.input-wrapper input {
    width: 100%;
    padding: 10px 10px 10px 40px;
    background: transparent;
    border: none;
    color: var(--text-light);
    font-size: 16px;
    outline: none;
}

.input-wrapper label {
    position: absolute;
    left: 40px;
    top: 50%;
    transform: translateY(-50%);
    color: #555;
    pointer-events: none;
    transition: 0.3s;
}

.input-wrapper .line {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: var(--primary);
    transform: scaleX(0);
    transition: 0.3s;
}

.input-wrapper input:focus ~ .line,
.input-wrapper input:valid ~ .line {
    transform: scaleX(1);
}

.input-wrapper input:focus ~ label,
.input-wrapper input:valid ~ label {
    top: -20px;
    font-size: 12px;
    color: var(--primary);
}

.input-wrapper i {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--primary);
}

.cyber-button {
    position: relative;
    padding: 15px 30px;
    background: transparent;
    color: var(--primary);
    border: none;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 2px;
    cursor: pointer;
    overflow: hidden;
    transition: 0.3s;
    margin: 10px;
}

.cyber-button span {
    position: absolute;
    background: var(--primary);
}

.cyber-button span:nth-child(1) {
    width: 100%;
    height: 2px;
    top: 0;
    left: -100%;
    animation: btn-anim1 2s linear infinite;
}

.cyber-button span:nth-child(2) {
    width: 2px;
    height: 100%;
    top: -100%;
    right: 0;
    animation: btn-anim2 2s linear infinite;
    animation-delay: 0.5s;
}

.cyber-button span:nth-child(3) {
    width: 100%;
    height: 2px;
    bottom: 0;
    right: -100%;
    animation: btn-anim3 2s linear infinite;
    animation-delay: 1s;
}

.cyber-button span:nth-child(4) {
    width: 2px;
    height: 100%;
    bottom: -100%;
    left: 0;
    animation: btn-anim4 2s linear infinite;
    animation-delay: 1.5s;
}

.cyber-button:hover {
    background: var(--primary);
    color: var(--bg-dark);
    box-shadow: 0 0 20px var(--primary);
}

@keyframes border {
    0% { background-position: 0 0; }
    100% { background-position: 400% 0; }
}

@keyframes scan {
    0% { transform: translateY(0); }
    100% { transform: translateY(100px); }
}

@keyframes scan-line {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
}

@keyframes glitch {
    0% { text-shadow: 0 0 10px var(--primary); }
    25% { text-shadow: 2px 2px var(--secondary), -2px -2px var(--primary); }
    50% { text-shadow: -2px 2px #ff0000, 2px -2px #00ff00; }
    75% { text-shadow: 2px -2px var(--secondary), -2px 2px var(--primary); }
    100% { text-shadow: 0 0 10px var(--primary); }
}

@keyframes flicker {
    0%, 19.999%, 22%, 62.999%, 64%, 64.999%, 70%, 100% {
        opacity: 1;
    }
    20%, 21.999%, 63%, 63.999%, 65%, 69.999% {
        opacity: 0.4;
    }
}

@keyframes btn-anim1 {
    0% { left: -100%; }
    50%, 100% { left: 100%; }
}

@keyframes btn-anim2 {
    0% { top: -100%; }
    50%, 100% { top: 100%; }
}

@keyframes btn-anim3 {
    0% { right: -100%; }
    50%, 100% { right: 100%; }
}

@keyframes btn-anim4 {
    0% { bottom: -100%; }
    50%, 100% { bottom: 100%; }
}

.error-message {
    color: #ff0000;
    font-size: 12px;
    margin-top: 5px;
}

.remember-me {
    margin: 20px 0;
}

.checkbox-container {
    display: flex;
    align-items: center;
    color: var(--text-light);
    cursor: pointer;
}

.checkbox-container input {
    display: none;
}

.checkmark {
    width: 20px;
    height: 20px;
    border: 2px solid var(--primary);
    margin-right: 10px;
    position: relative;
    display: inline-block;
}

.checkbox-container input:checked ~ .checkmark::after {
    content: '';
    position: absolute;
    left: 6px;
    top: 2px;
    width: 5px;
    height: 10px;
    border: solid var(--primary);
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
}

.button-group {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}
</style>

<script>
document.querySelector('.toggle-password').addEventListener('click', function() {
    const password = document.querySelector('#password');
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    this.classList.toggle('fa-eye');
    this.classList.toggle('fa-eye-slash');
});
</script>