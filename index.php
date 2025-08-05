<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SimplePHP Framework - Lightweight PHP MVC Framework</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-tomorrow.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #007bff;
            --secondary-color: #6c757d;
            --success-color: #28a745;
            --info-color: #17a2b8;
            --warning-color: #ffc107;
            --danger-color: #dc3545;
            --dark-color: #343a40;
            --light-color: #f8f9fa;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
        }

        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .hero-section .lead {
            font-size: 1.3rem;
            margin-bottom: 2rem;
        }

        .feature-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }

        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .code-block {
            background: #2d3748;
            border-radius: 8px;
            padding: 1.5rem;
            margin: 1rem 0;
            overflow-x: auto;
        }

        .folder-structure {
            background: #f8f9fa;
            border-left: 4px solid var(--primary-color);
            padding: 1.5rem;
            font-family: 'Courier New', monospace;
            white-space: pre-line;
            border-radius: 5px;
        }

        .nav-tabs .nav-link {
            border-radius: 10px 10px 0 0;
            margin-right: 5px;
        }

        .nav-tabs .nav-link.active {
            background: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
        }

        .section-title {
            position: relative;
            margin-bottom: 2rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--primary-color);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }

        .installation-step {
            background: white;
            border: 1px solid #e9ecef;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1rem;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .step-number {
            background: var(--primary-color);
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 1rem;
        }

        .roadmap-item {
            display: flex;
            align-items: center;
            padding: 0.5rem 0;
        }

        .roadmap-item i {
            margin-right: 0.5rem;
            color: var(--success-color);
        }

        .security-badge {
            background: linear-gradient(45deg, #28a745, #20c997);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            display: inline-block;
            margin: 0.25rem;
            font-size: 0.9rem;
        }

        .footer {
            background: var(--dark-color);
            color: white;
            padding: 3rem 0 1rem;
            margin-top: 4rem;
        }

        .toc {
            position: sticky;
            top: 100px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 1.5rem;
        }

        .toc a {
            color: var(--secondary-color);
            text-decoration: none;
            display: block;
            padding: 0.5rem 0;
            border-left: 3px solid transparent;
            padding-left: 1rem;
            transition: all 0.3s ease;
        }

        .toc a:hover,
        .toc a.active {
            color: var(--primary-color);
            border-left-color: var(--primary-color);
        }

        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }
            
            .toc {
                position: static;
                margin-bottom: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <i class="fas fa-rocket"></i> SimplePHP
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#installation">Installation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#documentation">Documentation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#examples">Examples</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white ml-2 px-3" href="https://github.com/yourname/SimplePHP_Framework" target="_blank">
                            <i class="fab fa-github"></i> GitHub
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <h1><i class="fas fa-rocket"></i> SimplePHP Framework</h1>
            <p class="lead">A lightweight and secure PHP MVC framework with .env support, ideal for learning and building small to medium web applications.</p>
            <div class="mt-4">
                <a href="#installation" class="btn btn-light btn-lg mr-3">
                    <i class="fas fa-download"></i> Get Started
                </a>
                <a href="#documentation" class="btn btn-outline-light btn-lg">
                    <i class="fas fa-book"></i> Documentation
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">Why Choose SimplePHP?</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card feature-card h-100 text-center p-4">
                        <div class="feature-icon text-primary">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h4>Lightweight & Fast</h4>
                        <p>Minimal footprint with maximum performance. Built for speed and efficiency.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card feature-card h-100 text-center p-4">
                        <div class="feature-icon text-success">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>Secure by Default</h4>
                        <p>Built-in security features including PDO prepared statements and environment separation.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card feature-card h-100 text-center p-4">
                        <div class="feature-icon text-info">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <h4>MVC Architecture</h4>
                        <p>Clean separation of concerns with Models, Views, and Controllers.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card feature-card h-100 text-center p-4">
                        <div class="feature-icon text-warning">
                            <i class="fas fa-cog"></i>
                        </div>
                        <h4>Environment Config</h4>
                        <p>Easy configuration management with .env file support.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card feature-card h-100 text-center p-4">
                        <div class="feature-icon text-danger">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h4>Learning Friendly</h4>
                        <p>Perfect for beginners to understand MVC patterns and PHP best practices.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card feature-card h-100 text-center p-4">
                        <div class="feature-icon text-primary">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h4>Composer Ready</h4>
                        <p>Modern PHP development with Composer dependency management.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Installation Section -->
    <section id="installation" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center mb-5">Quick Installation</h2>
            
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- Requirements -->
                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0"><i class="fas fa-list-check"></i> Requirements</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-success"></i> PHP 7.4 or higher</li>
                                        <li><i class="fas fa-check text-success"></i> Composer</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-success"></i> MySQL (for database usage)</li>
                                        <li><i class="fas fa-check text-success"></i> Apache (with mod_rewrite enabled)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Installation Steps -->
                    <div class="installation-step">
                        <div class="d-flex align-items-center mb-3">
                            <span class="step-number">1</span>
                            <h5 class="mb-0">Clone or Download</h5>
                        </div>
                        <div class="code-block">
                            <pre><code class="language-bash">git clone https://github.com/yourname/SimplePHP_Framework.git
cd SimplePHP_Framework</code></pre>
                        </div>
                    </div>

                    <div class="installation-step">
                        <div class="d-flex align-items-center mb-3">
                            <span class="step-number">2</span>
                            <h5 class="mb-0">Install Dependencies</h5>
                        </div>
                        <div class="code-block">
                            <pre><code class="language-bash">composer install</code></pre>
                        </div>
                    </div>

                    <div class="installation-step">
                        <div class="d-flex align-items-center mb-3">
                            <span class="step-number">3</span>
                            <h5 class="mb-0">Configure Environment</h5>
                        </div>
                        <p>Create a <code>.env</code> file in the root directory:</p>
                        <div class="code-block">
                            <pre><code class="language-bash">DB_HOST=localhost
DB_NAME=my_database
DB_USER=root
DB_PASS=
PORT=8000</code></pre>
                        </div>
                    </div>

                    <div class="installation-step">
                        <div class="d-flex align-items-center mb-3">
                            <span class="step-number">4</span>
                            <h5 class="mb-0">Start Development Server</h5>
                        </div>
                        <div class="code-block">
                            <pre><code class="language-bash">php -S localhost:8000 -t Public</code></pre>
                        </div>
                        <div class="alert alert-success mt-3">
                            <i class="fas fa-rocket"></i> Visit <a href="http://localhost:8000" target="_blank">http://localhost:8000</a> to see your framework in action!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Documentation Section -->
    <section id="documentation" class="py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">Documentation</h2>
            
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <div class="toc">
                        <h5>Table of Contents</h5>
                        <a href="#folder-structure">Folder Structure</a>
                        <a href="#routing">Routing</a>
                        <a href="#controllers">Controllers</a>
                        <a href="#models">Models</a>
                        <a href="#views">Views</a>
                        <a href="#security">Security</a>
                    </div>
                </div>
                
                <div class="col-lg-9">
                    <!-- Folder Structure -->
                    <div id="folder-structure" class="mb-5">
                        <h3 class="mb-4"><i class="fas fa-folder-tree"></i> Folder Structure</h3>
                        <div class="folder-structure">SimplePHP_Framework/
├── Public/                 # Public web-accessible directory
│   ├── index.php          # Entry point
│   └── .htaccess          # URL rewriting rules
├── Server/
│   ├── Controllers/       # Controller files
│   ├── Models/           # Model files
│   └── Core/             # Core system files
├── .env                  # Environment configuration
├── .gitignore           # Git ignore rules
├── composer.json        # Composer configuration
├── vendor/              # Composer dependencies
└── README.md            # Documentation</div>
                    </div>

                    <!-- Routing -->
                    <div id="routing" class="mb-5">
                        <h3 class="mb-4"><i class="fas fa-route"></i> Routing</h3>
                        <p>URLs follow a simple and intuitive pattern:</p>
                        <div class="alert alert-info">
                            <code>/controller/method/param1/param2/...</code>
                        </div>
                        <h5>Examples:</h5>
                        <ul>
                            <li><code>/home/index</code> - Calls HomeController::index()</li>
                            <li><code>/user/profile/123</code> - Calls UserController::profile(123)</li>
                            <li><code>/api/users/create</code> - Calls ApiController::users('create')</li>
                        </ul>
                    </div>

                    <!-- Controllers -->
                    <div id="controllers" class="mb-5">
                        <h3 class="mb-4"><i class="fas fa-microchip"></i> Controllers</h3>
                        <p>Controllers handle the application logic and are located in <code>Server/Controllers/</code>.</p>
                        <h5>Example Controller:</h5>
                        <div class="code-block">
                            <pre><code class="language-php">&lt;?php
class HomeController {
    
    public function index() {
        echo "Hello from HomeController!";
    }
    
    public function hello($name = "Guest") {
        echo "Hello, " . htmlspecialchars($name) . "!";
    }
    
    public function about() {
        $data = [
            'title' => 'About Us',
            'description' => 'Learn more about our framework'
        ];
        $this->view('home/about', $data);
    }
}</code></pre>
                        </div>
                    </div>

                    <!-- Models -->
                    <div id="models" class="mb-5">
                        <h3 class="mb-4"><i class="fas fa-database"></i> Models</h3>
                        <p>Models handle database operations and business logic. Place them in <code>Server/Models/</code>.</p>
                        <h5>Example Model:</h5>
                        <div class="code-block">
                            <pre><code class="language-php">&lt;?php
use PDO;

class User {
    private $db;
    
    public function __construct() {
        // Database connection using environment variables
        $this->db = new PDO(
            "mysql:host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_NAME'],
            $_ENV['DB_USER'],
            $_ENV['DB_PASS']
        );
    }
    
    public function getAllUsers() {
        $stmt = $this->db->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function createUser($name, $email) {
        $stmt = $this->db->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
        return $stmt->execute([$name, $email]);
    }
}</code></pre>
                        </div>
                    </div>

                    <!-- Views -->
                    <div id="views" class="mb-5">
                        <h3 class="mb-4"><i class="fas fa-eye"></i> Views (Optional)</h3>
                        <p>Load view templates from your controllers:</p>
                        <div class="code-block">
                            <pre><code class="language-php">// In your controller
$this->view('home/index', [
    'title' => 'Welcome',
    'user' => $userData
]);</code></pre>
                        </div>
                    </div>

                    <!-- Security -->
                    <div id="security" class="mb-5">
                        <h3 class="mb-4"><i class="fas fa-shield-alt"></i> Security Features</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <span class="security-badge">
                                    <i class="fas fa-lock"></i> .env Configuration
                                </span>
                                <span class="security-badge">
                                    <i class="fas fa-folder-lock"></i> Protected Directories
                                </span>
                                <span class="security-badge">
                                    <i class="fas fa-database"></i> PDO Prepared Statements
                                </span>
                            </div>
                            <div class="col-md-6">
                                <span class="security-badge">
                                    <i class="fas fa-header"></i> Security Headers
                                </span>
                                <span class="security-badge">
                                    <i class="fas fa-filter"></i> Input Sanitization
                                </span>
                                <span class="security-badge">
                                    <i class="fas fa-shield-virus"></i> XSS Protection
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Examples Section -->
    <section id="examples" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center mb-5">Code Examples</h2>
            
            <div class="row">
                <div class="col-lg-12">
                    <!-- Tabs -->
                    <ul class="nav nav-tabs" id="exampleTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="basic-tab" data-toggle="tab" href="#basic" role="tab">Basic Setup</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="api-tab" data-toggle="tab" href="#api" role="tab">API Controller</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="database-tab" data-toggle="tab" href="#database" role="tab">Database Model</a>
                        </li>
                    </ul>
                    
                    <!-- Tab Content -->
                    <div class="tab-content" id="exampleTabContent">
                        <div class="tab-pane fade show active" id="basic" role="tabpanel">
                            <div class="code-block mt-3">
                                <pre><code class="language-php">&lt;?php
// Server/Controllers/HomeController.php
class HomeController extends Controller {
    
    public function index() {
        $data = [
            'title' => 'Welcome to SimplePHP',
            'message' => 'Your framework is ready!'
        ];
        
        $this->view('home/index', $data);
    }
    
    public function api() {
        header('Content-Type: application/json');
        echo json_encode([
            'status' => 'success',
            'framework' => 'SimplePHP',
            'version' => '1.0.0'
        ]);
    }
}</code></pre>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="api" role="tabpanel">
                            <div class="code-block mt-3">
                                <pre><code class="language-php">&lt;?php
// Server/Controllers/ApiController.php
class ApiController extends Controller {
    
    public function users($action = 'list') {
        header('Content-Type: application/json');
        
        $userModel = new User();
        
        switch($action) {
            case 'list':
                $users = $userModel->getAllUsers();
                echo json_encode(['users' => $users]);
                break;
                
            case 'create':
                if ($_POST['name'] && $_POST['email']) {
                    $result = $userModel->createUser($_POST['name'], $_POST['email']);
                    echo json_encode(['success' => $result]);
                } else {
                    http_response_code(400);
                    echo json_encode(['error' => 'Missing required fields']);
                }
                break;
        }
    }
}</code></pre>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="database" role="tabpanel">
                            <div class="code-block mt-3">
                                <pre><code class="language-php">&lt;?php
// Server/Models/Product.php
class Product {
    private $db;
    
    public function __construct() {
        $this->db = new PDO(
            "mysql:host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_NAME'],
            $_ENV['DB_USER'],
            $_ENV['DB_PASS'],
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    }
    
    public function getProducts($limit = 10) {
        $stmt = $this->db->prepare("SELECT * FROM products LIMIT ?");
        $stmt->execute([$limit]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getProductById($id) {
        $stmt = $this->db->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function searchProducts($query) {
        $stmt = $this->db->prepare("SELECT * FROM products WHERE name LIKE ?");
        $stmt->execute(['%' . $query . '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Roadmap Section -->
    <section id="roadmap" class="py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">Roadmap</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Upcoming Features</h5>
                            <div class="roadmap-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Add View template engine (Blade, Twig, etc.)</span>
                            </div>
                            <div class="roadmap-item">
                                <i class="fas fa-check-circle"></i>
                                <span>CLI support for scaffolding</span>
                            </div>
                            <div class="roadmap-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Advanced routing with named routes</span>
                            </div>
                            <div class="roadmap-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Middleware system</span>
                            </div>
                            <div class="roadmap-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Authentication scaffolding</span>
                            </div>
                            <div class="roadmap-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Database migrations</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5><i class="fas fa-rocket"></i> SimplePHP Framework</h5>
                    <p>A lightweight and secure PHP MVC framework for modern web development.</p>
                    <div class="mt-3">
                        <a href="#" class="text-light mr-3"><i class="fab fa-github fa-2x"></i></a>
                        <a href="#" class="text-light mr-3"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="#" class="text-light"><i class="fas fa-envelope fa-2x"></i></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="#installation" class="text-light">Installation</a></li>
                        <li><a href="#documentation" class="text-light">Documentation</a></li>
                        <li><a href="#examples" class="text-light">Examples</a></li>
                        <li><a href="#roadmap" class="text-light">Roadmap</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6>Community</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light">GitHub Issues</a></li>
                        <li><a href="#" class="text-light">Discussions</a></li>
                        <li><a href="#" class="text-light">Contributing</a></li>
                        <li><a href="#" class="text-light">License</a></li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="row align-items-center