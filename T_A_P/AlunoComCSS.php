<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aluno - Brasil Cyber Edition 🇧🇷</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Texto da bandeira -->
<div class="brazil-flag-text">ORDEM E PROGRESSO</div>

<?php
class Aluno{
    public $ra;
    public $nome;
    public $p1;
    public $p2;
    public $media;

    public function CalcularMedia(){
        $this->media = ($this->p1 + $this->p2) / 2;
    }

    public function MostrarAtributos(){
        echo "
        <div class='card'>
            <h2 data-text='📚 DADOS DO ALUNO'>📚 DADOS DO ALUNO</h2>

            <div class='info'><strong>RA:</strong> <span>$this->ra</span></div>
            <div class='info'><strong>Nome:</strong> <span>$this->nome</span></div>
            <div class='info'><strong>P1:</strong> <span>$this->p1</span></div>
            <div class='info'><strong>P2:</strong> <span>$this->p2</span></div>

            <div class='media'>
                MÉDIA: $this->media
            </div>
        </div>
        ";
    }
}

$c1 = new Aluno();
$c1->ra = 15961;
$c1->nome = "Eduardo";
$c1->p1 = 10;
$c1->p2 = 10;

$c1->CalcularMedia();
$c1->MostrarAtributos();
?>

<!-- Scoreboard -->
<div class="scoreboard-container">
    <h2>🏆 RANKING BRASILEIRO 🏆</h2>
    <table class="score-table" id="scoreTable">
        <thead>
            <tr>
                <th>POSIÇÃO</th>
                <th>JOGADOR</th>
                <th>SCORE</th>
                <th>DATA</th>
            </tr>
        </thead>
        <tbody id="scoreBody">
            <!-- Preenchido via JavaScript -->
        </tbody>
    </table>
</div>

<!-- Jogo -->
<div class="game-container">
    <h2>🇧🇷 TIRO AUTOMÁTICO BRASIL 🇧🇷</h2>
    
    <div class="game-info">
        <div class="score">
            SCORE: <span id="score">0</span>
        </div>
        <div class="health">
            VIDA:
            <div class="health-bar">
                <div class="health-fill" id="healthFill" style="width: 100%"></div>
            </div>
        </div>
        <div class="high-score">
            RECORDE: <span id="highScore">0</span>
        </div>
    </div>
    
    <canvas id="gameCanvas" width="800" height="400"></canvas>
    
    <div class="game-controls">
        <button class="game-btn" id="startGame">▶ INICIAR JOGO</button>
        <button class="game-btn" id="restartGame">⟲ REINICIAR</button>
    </div>
</div>

<!-- Game Over Modal -->
<div class="game-over" id="gameOver">
    <h3>🇧🇷 GAME OVER 🇧🇷</h3>
    <p>SCORE: <span id="finalScore">0</span></p>
    <button class="game-btn" onclick="restartGame()">JOGAR NOVAMENTE</button>
</div>

<script>
// Sistema de Scoreboard
let scores = JSON.parse(localStorage.getItem('brazilScores')) || [];

function addScore(playerName, score) {
    const date = new Date().toLocaleDateString('pt-BR');
    scores.push({ name: playerName, score: score, date: date });
    scores.sort((a, b) => b.score - a.score);
    scores = scores.slice(0, 10); // Mantém apenas top 10
    localStorage.setItem('brazilScores', JSON.stringify(scores));
    updateScoreboard();
}

function updateScoreboard() {
    const tbody = document.getElementById('scoreBody');
    tbody.innerHTML = '';
    
    scores.forEach((score, index) => {
        const tr = document.createElement('tr');
        if (score.name === 'VOCÊ') {
            tr.className = 'current-player';
        }
        tr.innerHTML = `
            <td>${index + 1}º</td>
            <td>${score.name}</td>
            <td>${score.score}</td>
            <td>${score.date}</td>
        `;
        tbody.appendChild(tr);
    });
}

/<script>
// Sistema de Scoreboard
let scores = JSON.parse(localStorage.getItem('brazilScores')) || [];

function addScore(playerName, score) {
    const date = new Date().toLocaleDateString('pt-BR');
    scores.push({ name: playerName, score: score, date: date });
    scores.sort((a, b) => b.score - a.score);
    scores = scores.slice(0, 10);
    localStorage.setItem('brazilScores', JSON.stringify(scores));
    updateScoreboard();
}

function updateScoreboard() {
    const tbody = document.getElementById('scoreBody');
    tbody.innerHTML = '';
    
    scores.forEach((score, index) => {
        const tr = document.createElement('tr');
        if (score.name === 'VOCÊ') {
            tr.className = 'current-player';
        }
        tr.innerHTML = `
            <td>${index + 1}º</td>
            <td>${score.name}</td>
            <td>${score.score}</td>
            <td>${score.date}</td>
        `;
        tbody.appendChild(tr);
    });
}

// Configuração do Jogo
const canvas = document.getElementById('gameCanvas');
const ctx = canvas.getContext('2d');
canvas.width = 800;
canvas.height = 400;

// FUNÇÃO PARA DESENHAR A BANDEIRA DO BRASIL NO FUNDO
function desenharBandeiraBrasil() {
    // Verde (fundo)
    ctx.fillStyle = '#009c3b';
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    
    // Amarelo (losango)
    ctx.fillStyle = '#ffdf00';
    ctx.beginPath();
    ctx.moveTo(canvas.width / 2, 50);
    ctx.lineTo(canvas.width - 100, canvas.height / 2);
    ctx.lineTo(canvas.width / 2, canvas.height - 50);
    ctx.lineTo(100, canvas.height / 2);
    ctx.closePath();
    ctx.fill();
    
    // Azul (círculo)
    ctx.fillStyle = '#002776';
    ctx.beginPath();
    ctx.arc(canvas.width / 2, canvas.height / 2, 120, 0, 2 * Math.PI);
    ctx.fill();
    
    // Estrelas do círculo azul
    ctx.fillStyle = '#ffffff';
    
    // Posições das estrelas (simulando o céu)
    const estrelas = [
        { x: 350, y: 160 }, // Estrela 1
        { x: 450, y: 160 }, // Estrela 2
        { x: 380, y: 200 }, // Estrela 3
        { x: 420, y: 200 }, // Estrela 4
        { x: 330, y: 220 }, // Estrela 5
        { x: 470, y: 220 }, // Estrela 6
        { x: 360, y: 250 }, // Estrela 7
        { x: 440, y: 250 }, // Estrela 8
        { x: 400, y: 270 }, // Estrela 9
        { x: 380, y: 290 }, // Estrela 10
        { x: 420, y: 290 }, // Estrela 11
        { x: 400, y: 200 }, // Estrela 12
        { x: 400, y: 230 }, // Estrela 13
        { x: 400, y: 260 }, // Estrela 14
        { x: 370, y: 170 }, // Estrela 15
        { x: 430, y: 170 }, // Estrela 16
        { x: 350, y: 190 }, // Estrela 17
        { x: 450, y: 190 }, // Estrela 18
        { x: 340, y: 240 }, // Estrela 19
        { x: 460, y: 240 }, // Estrela 20
        { x: 360, y: 270 }, // Estrela 21
        { x: 440, y: 270 }, // Estrela 22
        { x: 390, y: 210 }, // Estrela 23
        { x: 410, y: 210 }, // Estrela 24
        { x: 390, y: 280 }, // Estrela 25
        { x: 410, y: 280 }, // Estrela 26
        { x: 400, y: 300 }, // Estrela 27
    ];
    
    estrelas.forEach(estrela => {
        ctx.beginPath();
        ctx.arc(estrela.x, estrela.y, 3, 0, 2 * Math.PI);
        ctx.fill();
        
        // Brilho da estrela
        ctx.shadowColor = '#ffffff';
        ctx.shadowBlur = 10;
        ctx.fill();
        ctx.shadowBlur = 0;
    });
    
    // Faixa branca "ORDEM E PROGRESSO"
    ctx.fillStyle = 'rgba(255, 255, 255, 0.9)';
    ctx.font = 'bold 18px "Orbitron", sans-serif';
    ctx.textAlign = 'center';
    ctx.fillText('ORDEM E PROGRESSO', canvas.width / 2, canvas.height / 2 + 40);
    
    // Contorno da faixa
    ctx.strokeStyle = '#009c3b';
    ctx.lineWidth = 2;
    ctx.strokeText('ORDEM E PROGRESSO', canvas.width / 2, canvas.height / 2 + 40);
}

let gameRunning = false;
let score = 0;
let health = 100;
let enemies = [];
let bullets = [];
let animationId;
let spawnInterval;
let autoShootInterval;
let highScore = localStorage.getItem('brazilHighScore') || 0;

// Elementos DOM
const scoreElement = document.getElementById('score');
const highScoreElement = document.getElementById('highScore');
const healthFill = document.getElementById('healthFill');
const gameOverElement = document.getElementById('gameOver');
const finalScoreElement = document.getElementById('finalScore');

highScoreElement.textContent = highScore;

// Classe do Inimigo
class Enemy {
    constructor() {
        this.radius = 20;
        this.x = canvas.width + this.radius;
        this.y = Math.random() * (canvas.height - 2 * this.radius) + this.radius;
        this.speed = 2 + Math.random() * 3;
        // Cores dos inimigos baseadas na bandeira do Brasil
        const cores = ['#009c3b', '#ffdf00', '#002776'];
        this.color = cores[Math.floor(Math.random() * cores.length)];
    }
    
    update() {
        this.x -= this.speed;
    }
    
    draw() {
        // Corpo
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
        ctx.fillStyle = this.color;
        ctx.shadowColor = this.color;
        ctx.shadowBlur = 20;
        ctx.fill();
        
        // Olhos
        ctx.shadowBlur = 0;
        ctx.fillStyle = '#fff';
        ctx.beginPath();
        ctx.arc(this.x - 7, this.y - 5, 4, 0, Math.PI * 2);
        ctx.fill();
        ctx.beginPath();
        ctx.arc(this.x + 7, this.y - 5, 4, 0, Math.PI * 2);
        ctx.fill();
        
        // Pupilas
        ctx.fillStyle = '#000';
        ctx.beginPath();
        ctx.arc(this.x - 7, this.y - 5, 2, 0, Math.PI * 2);
        ctx.fill();
        ctx.beginPath();
        ctx.arc(this.x + 7, this.y - 5, 2, 0, Math.PI * 2);
        ctx.fill();
        
        // Boca (dependendo da cor)
        ctx.beginPath();
        ctx.strokeStyle = '#000';
        ctx.lineWidth = 2;
        if (this.color === '#ffdf00') {
            // Inimigo amarelo - sorriso
            ctx.arc(this.x, this.y + 5, 8, 0.1, Math.PI - 0.1, false);
        } else {
            // Inimigos verde e azul - boca malvada
            ctx.arc(this.x, this.y + 5, 8, 0, Math.PI, false);
        }
        ctx.stroke();
    }
}

// Classe do Tiro
class Bullet {
    constructor(x, y, targetX, targetY) {
        this.x = x;
        this.y = y;
        const angle = Math.atan2(targetY - y, targetX - x);
        this.vx = Math.cos(angle) * 8;
        this.vy = Math.sin(angle) * 8;
        this.radius = 4;
        this.life = true;
    }
    
    update() {
        this.x += this.vx;
        this.y += this.vy;
        
        if (this.x < 0 || this.x > canvas.width || this.y < 0 || this.y > canvas.height) {
            this.life = false;
        }
    }
    
    draw() {
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
        ctx.fillStyle = '#ffdf00';
        ctx.shadowColor = '#ffdf00';
        ctx.shadowBlur = 15;
        ctx.fill();
        
        // Rastro verde e amarelo
        ctx.beginPath();
        ctx.arc(this.x - this.vx/2, this.y - this.vy/2, this.radius * 2, 0, Math.PI * 2);
        ctx.fillStyle = 'rgba(0, 156, 59, 0.3)';
        ctx.shadowBlur = 10;
        ctx.fill();
    }
}

// Função de tiro automático
function autoShoot() {
    if (!gameRunning) return;
    
    let closestEnemy = null;
    let closestDistance = Infinity;
    
    enemies.forEach(enemy => {
        const distance = Math.sqrt(Math.pow(enemy.x - 400, 2) + Math.pow(enemy.y - 350, 2));
        if (distance < closestDistance) {
            closestDistance = distance;
            closestEnemy = enemy;
        }
    });
    
    if (closestEnemy) {
        bullets.push(new Bullet(400, 350, closestEnemy.x, closestEnemy.y));
    }
}

// Game Loop
function gameLoop() {
    if (!gameRunning) return;
    
    // Desenha a bandeira do Brasil no fundo
    desenharBandeiraBrasil();
    
    // Desenha mira automática
    if (enemies.length > 0) {
        const target = enemies.reduce((closest, enemy) => {
            const dist = Math.sqrt(Math.pow(enemy.x - 400, 2) + Math.pow(enemy.y - 350, 2));
            return dist < closest.dist ? { enemy, dist } : closest;
        }, { enemy: null, dist: Infinity }).enemy;
        
        if (target) {
            ctx.beginPath();
            ctx.moveTo(400, 350);
            ctx.lineTo(target.x, target.y);
            ctx.strokeStyle = '#ffffff';
            ctx.lineWidth = 2;
            ctx.setLineDash([5, 5]);
            ctx.shadowColor = '#ffffff';
            ctx.shadowBlur = 10;
            ctx.stroke();
            ctx.setLineDash([]);
            ctx.shadowBlur = 0;
        }
    }
    
    // Atualiza e desenha tiros
    bullets = bullets.filter(bullet => {
        bullet.update();
        bullet.draw();
        
        for (let i = enemies.length - 1; i >= 0; i--) {
            const enemy = enemies[i];
            const dx = bullet.x - enemy.x;
            const dy = bullet.y - enemy.y;
            const distance = Math.sqrt(dx * dx + dy * dy);
            
            if (distance < enemy.radius + bullet.radius) {
                enemies.splice(i, 1);
                score += 100;
                scoreElement.textContent = score;
                
                if (score > highScore) {
                    highScore = score;
                    highScoreElement.textContent = highScore;
                    localStorage.setItem('brazilHighScore', highScore);
                }
                return false;
            }
        }
        
        return bullet.life;
    });
    
    // Atualiza e desenha inimigos
    enemies = enemies.filter(enemy => {
        enemy.update();
        enemy.draw();
        
        const dx = enemy.x - 400;
        const dy = enemy.y - 350;
        const distance = Math.sqrt(dx * dx + dy * dy);
        
        if (distance < enemy.radius + 15) {
            health = Math.max(0, health - 20);
            healthFill.style.width = health + '%';
            
            if (health <= 0) {
                gameOver();
            }
            return false;
        }
        
        if (enemy.x + enemy.radius < 0) {
            health = Math.max(0, health - 10);
            healthFill.style.width = health + '%';
            
            if (health <= 0) {
                gameOver();
            }
            return false;
        }
        
        return true;
    });
    
    // Desenha jogador (Escudo do Brasil)
    ctx.shadowBlur = 30;
    ctx.shadowColor = '#ffdf00';
    
    // Escudo circular com as cores do Brasil
    ctx.beginPath();
    ctx.arc(400, 350, 25, 0, Math.PI * 2);
    ctx.fillStyle = '#009c3b';
    ctx.fill();
    
    ctx.beginPath();
    ctx.arc(400, 350, 20, 0, Math.PI * 2);
    ctx.fillStyle = '#ffdf00';
    ctx.fill();
    
    ctx.beginPath();
    ctx.arc(400, 350, 15, 0, Math.PI * 2);
    ctx.fillStyle = '#002776';
    ctx.fill();
    
    // Estrela no centro
    ctx.shadowBlur = 20;
    ctx.fillStyle = '#ffffff';
    ctx.font = '20px "Orbitron"';
    ctx.textAlign = 'center';
    ctx.textBaseline = 'middle';
    ctx.fillText('★', 400, 350);
    
    animationId = requestAnimationFrame(gameLoop);
}

// Funções de controle
function startGame() {
    if (gameRunning) return;
    
    gameRunning = true;
    score = 0;
    health = 100;
    enemies = [];
    bullets = [];
    
    scoreElement.textContent = score;
    healthFill.style.width = '100%';
    gameOverElement.classList.remove('show');
    
    spawnInterval = setInterval(() => {
        if (gameRunning) {
            enemies.push(new Enemy());
        }
    }, 800);
    
    autoShootInterval = setInterval(autoShoot, 300);
    
    gameLoop();
}

function restartGame() {
    gameRunning = false;
    clearInterval(spawnInterval);
    clearInterval(autoShootInterval);
    cancelAnimationFrame(animationId);
    startGame();
}

function gameOver() {
    gameRunning = false;
    clearInterval(spawnInterval);
    clearInterval(autoShootInterval);
    cancelAnimationFrame(animationId);
    
    finalScoreElement.textContent = score;
    gameOverElement.classList.add('show');
    
    const playerName = prompt('🇧🇷 PARABÉNS! Digite seu nome para o ranking brasileiro:', 'JOGADOR');
    if (playerName) {
        addScore(playerName.toUpperCase(), score);
    } else {
        addScore('ANÔNIMO', score);
    }
}

// Event Listeners
document.getElementById('startGame').addEventListener('click', startGame);
document.getElementById('restartGame').addEventListener('click', restartGame);

// Desenha a bandeira uma vez ao carregar
desenharBandeiraBrasil();

// Inicializa scoreboard
updateScoreboard();
</script>
</script>

</body>
</html>