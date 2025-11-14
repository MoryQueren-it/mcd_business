<!DOCTYPE html>
<!-- saved from url=(0031)http://127.0.0.1:5502/home.html -->
<html lang="fr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McDonald's Investment - Dashboard</title>
    <link rel="stylesheet" href="./McDonald&#39;s Investment - Dashboard_files/home-styles.css">
    <link rel="stylesheet" href="../css/home-styles.css">
</head>
<body>
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>

    <div class="container">
        <nav class="sidebar">
            <div class="logo-section">
                <img class="logo" src="./McDonald&#39;s Investment - Dashboard_files/1759996755535.png" alt="">
                <h2>McDonald's<br><span>Investment</span></h2>
            </div>
            
            <ul class="nav-menu">
                <li class="nav-item active" data-section="dashboard">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="7" height="7"></rect>
                        <rect x="14" y="3" width="7" height="7"></rect>
                        <rect x="14" y="14" width="7" height="7"></rect>
                        <rect x="3" y="14" width="7" height="7"></rect>
                    </svg>
                    <span>Dashboard</span>
                </li>
                <li class="nav-item" data-section="depot">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <polyline points="19 12 12 19 5 12"></polyline>
                    </svg>
                    <span>Dépôt</span>
                </li>
                <li class="nav-item" data-section="retrait">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="12" y1="19" x2="12" y2="5"></line>
                        <polyline points="5 12 12 5 19 12"></polyline>
                    </svg>
                    <span>Retrait</span>
                </li>
                <li class="nav-item" data-section="achat">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                    </svg>
                    <span>Achat</span>
                </li>
                <li class="nav-item" data-section="profile">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span>Profil</span>
                </li>
            </ul>

            <button class="logout-btn" onclick="window.location.href=&#39;index.html&#39;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg>
                Déconnexion
            </button>
        </nav>

        <nav class="mobile-nav">
            <div class="mobile-nav-item" data-section="dashboard">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="3" width="7" height="7"></rect>
                    <rect x="14" y="3" width="7" height="7"></rect>
                    <rect x="14" y="14" width="7" height="7"></rect>
                    <rect x="3" y="14" width="7" height="7"></rect>
                </svg>
                <span>Dashboard</span>
            </div>
            <div class="mobile-nav-item" data-section="depot">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <polyline points="19 12 12 19 5 12"></polyline>
                </svg>
                <span>Dépôt</span>
            </div>
            <div class="mobile-nav-item mobile-nav-center" data-section="achat">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="21" r="1"></circle>
                    <circle cx="20" cy="21" r="1"></circle>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                </svg>
            </div>
            <div class="mobile-nav-item" data-section="retrait">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="12" y1="19" x2="12" y2="5"></line>
                    <polyline points="5 12 12 5 19 12"></polyline>
                </svg>
                <span>Retrait</span>
            </div>
            <div class="mobile-nav-item" data-section="profile">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <span>Profil</span>
            </div>
        </nav>

        <main class="main-content">
            <section id="dashboard" class="section active">
                <div class="section-header">
                    <div>
                        <h1>Bienvenue, <span class="user-name">Mory Quéren</span></h1>
                        <p>Voici votre tableau de bord</p>
                    </div>
                    <div class="profile-pic">
                        <img src="./McDonald&#39;s Investment - Dashboard_files/1758287635215.jpg" alt="Profile">
                    </div>
                </div>

                <div class="balance-card">
                    <div class="balance-info">
                        <p class="balance-label">Balance Actuelle</p>
                        <h2 class="balance-amount">125,000 Ar</h2>
                        <div class="balance-change positive">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="18 15 12 9 6 15"></polyline>
                            </svg>
                            <span>+12.5% ce mois</span>
                        </div>
                    </div>
                    <div class="quick-actions">
                        <button class="quick-btn" onclick="showSection(&#39;depot&#39;)">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <polyline points="19 12 12 19 5 12"></polyline>
                            </svg>
                        </button>
                        <button class="quick-btn" onclick="showSection(&#39;retrait&#39;)">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="12" y1="19" x2="12" y2="5"></line>
                                <polyline points="5 12 12 5 19 12"></polyline>
                            </svg>
                        </button>
                        <button class="quick-btn" onclick="showSection(&#39;achat&#39;)">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                

                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon deposit">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <polyline points="19 12 12 19 5 12"></polyline>
                            </svg>
                        </div>
                        <div class="stat-info">
                            <p class="stat-label">Total Dépôts</p>
                            <h3 class="stat-value">250,000 Ar</h3>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon withdrawal">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="12" y1="19" x2="12" y2="5"></line>
                                <polyline points="5 12 12 5 19 12"></polyline>
                            </svg>
                        </div>
                        <div class="stat-info">
                            <p class="stat-label">Total Retraits</p>
                            <h3 class="stat-value">150,000 Ar</h3>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon profit">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                            </svg>
                        </div>
                        <div class="stat-info">
                            <p class="stat-label">Gains Totaux</p>
                            <h3 class="stat-value">25,000 Ar</h3>
                        </div>
                    </div>
                </div>

                <div class="recent-activity">
                    <h3>Activité Récente</h3>
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-icon deposit">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <polyline points="19 12 12 19 5 12"></polyline>
                                </svg>
                            </div>
                            <div class="activity-info">
                                <p class="activity-title">Dépôt via MVola</p>
                                <p class="activity-date">Il y a 2 heures</p>
                            </div>
                            <p class="activity-amount positive">+50,000 Ar</p>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon purchase">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                            </div>
                            <div class="activity-info">
                                <p class="activity-title">Achat VP1</p>
                                <p class="activity-date">Hier</p>
                            </div>
                            <p class="activity-amount">20,000 Ar</p>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon withdrawal">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="12" y1="19" x2="12" y2="5"></line>
                                    <polyline points="5 12 12 5 19 12"></polyline>
                                </svg>
                            </div>
                            <div class="activity-info">
                                <p class="activity-title">Retrait via Airtel Money</p>
                                <p class="activity-date">Il y a 3 jours</p>
                            </div>
                            <p class="activity-amount negative">-30,000 Ar</p>
                        </div>
                    </div>
                </div>
                <br><br>
                <div>
                    <h1>Retrouvez vos <span class="user-name">tâches</span> ici</h1><h1>                        
                </h1></div><br><br>

                <div class="recent-activity">
                    <h3>Tâches récentes</h3>
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-icon deposit">

                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                    </svg>
                                
                            </div>
                            <div class="activity-info">
                                <p class="activity-title">Dépôt via MVola</p>
                                <p class="activity-date">Il y a 2 heures</p>
                            </div>
                            <p class="activity-amount positive">+50,000 Ar</p>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon purchase">

                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                    </svg>
                        
                            </div>
                            <div class="activity-info">
                                <p class="activity-title">Achat VP1</p>
                                <p class="activity-date">Hier</p>
                            </div>
                            <p class="activity-amount">20,000 Ar</p>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon withdrawal">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="12" y1="19" x2="12" y2="5"></line>
                                    <polyline points="5 12 12 5 19 12"></polyline>
                                </svg>
                            </div>
                            <div class="activity-info">
                                <p class="activity-title">Retrait via Airtel Money</p>
                                <p class="activity-date">Il y a 3 jours</p>
                            </div>
                            <p class="activity-amount negative">-30,000 Ar</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="depot" class="section">
                <div class="section-header">
                    <h1>Dépôt</h1>
                    <p>Ajoutez des fonds à votre compte</p>
                </div>

                <div class="payment-methods">
                    <h3>Méthodes de Paiement Disponibles</h3>
                    <div class="methods-grid">
                        <div class="method-card">
                            <div class="method-icon mvola">
                                <img class="operateur" src="../img/mvola.png">
                            </div>
                            <h4>MVola</h4>
                            <p>Dépôt instantané via MVola. Frais: 0%</p>
                        </div>
                        <div class="method-card">
                            <div class="method-icon airtel">
                                <img class="operateur" src="../img/airtel.jpg" alt="">
                            </div>
                            <h4>Airtel Money</h4>
                            <p>Dépôt rapide via Airtel Money. Frais: 0%</p>
                        </div>
                        <div class="method-card">
                            <div class="method-icon orange">
                                <img class="operateur" src="../img/orange.jpg" alt="">

                            </div>
                            <h4>Orange Money</h4>
                            <p>Dépôt sécurisé via Orange Money. Frais: 0%</p>
                        </div>
                    </div>
                </div>

                <div class="transaction-form">
                    <h3>Effectuer un Dépôt</h3>
                    <form id="depositForm">
                        <div class="form-group">
                            <label for="depositAmount">Montant (Ar)</label>
                            <input type="number" id="depositAmount" placeholder="Ex: 50000" min="1000" required="">
                        </div>
                        <div class="form-group">
                            <label for="depositOperator">Opérateur</label>
                            <select id="depositOperator" required="">
                                <option value="">Sélectionnez un opérateur</option>
                                <option value="mvola">MVola</option>
                                <option value="airtel">Airtel Money</option>
                                <option value="orange">Orange Money</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="depositNumber">Numéro de Téléphone</label>
                            <input type="tel" id="depositNumber" placeholder="Ex: 034 12 345 67" required="">
                        </div>
                        <button type="submit" class="submit-btn">
                            <span>Confirmer le Dépôt</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </button>
                    </form>
                </div>
            </section>

            <section id="retrait" class="section">
                <div class="section-header">
                    <h1>Retrait</h1>
                    <p>Retirez vos gains</p>
                </div>

                <div class="balance-info-card">
                    <p>Solde Disponible pour Retrait</p>
                    <h2>125,000 Ar</h2>
                </div>

                <div class="payment-methods">
                    <h3>Méthodes de Retrait Disponibles</h3>
                    <div class="methods-grid">
                        <div class="method-card">
                            <div class="method-icon mvola">
                                <img class="operateur" src="../img/mvola.png" alt="Profile">

                                
                            </div>
                            <h4>MVola</h4>
                            <p>Retrait instantané. Frais: 2%</p>
                        </div>
                        <div class="method-card">
                            <div class="method-icon airtel">
                                <img class="operateur" src="../img/airtel.jpg" alt="Profile">
                            </div>
                            <h4>Airtel Money</h4>
                            <p>Retrait rapide. Frais: 2%</p>
                        </div>
                        <div class="method-card">
                            <div class="method-icon orange">
                                <img class="operateur" src="../img/orange.jpg" alt="Profile">
                            </div>
                            <h4>Orange Money</h4>
                            <p>Retrait sécurisé. Frais: 2%</p>
                        </div>
                    </div>
                </div>

                <div class="transaction-form">
                    <h3>Effectuer un Retrait</h3>
                    <form id="withdrawalForm">
                        <div class="form-group">
                            <label for="withdrawalAmount">Montant (Ar)</label>
                            <input type="number" id="withdrawalAmount" placeholder="Ex: 50000" min="5000" max="125000" required="">
                            <small>Montant minimum: 5,000 Ar</small>
                        </div>
                        <div class="form-group">
                            <label for="withdrawalOperator">Opérateur</label>
                            <select id="withdrawalOperator" required="">
                                <option value="">Sélectionnez un opérateur</option>
                                <option value="mvola">MVola</option>
                                <option value="airtel">Airtel Money</option>
                                <option value="orange">Orange Money</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="withdrawalNumber">Numéro de Téléphone</label>
                            <input type="tel" id="withdrawalNumber" placeholder="Ex: 034 12 345 67" required="">
                        </div>
                        <button type="submit" class="submit-btn">
                            <span>Confirmer le Retrait</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </button>
                    </form>
                </div>

                <div class="confirmation-example">
                    <h3>Exemple de SMS de Confirmation</h3>
                    <div class="sms-preview">
                        <img src="./McDonald&#39;s Investment - Dashboard_files/1760096256736.jpg" alt="SMS Confirmation">
                        <p>Vous recevrez un SMS similaire après chaque retrait réussi</p>
                    </div>
                </div>
            </section>

            <section id="achat" class="section">
                <div class="section-header">
                    <h1>Offres d'Investissement</h1>
                    <p>Choisissez votre pack et commencez à gagner</p>
                </div>

                <div class="offers-grid">
                    <div class="offer-card">
                        <div class="offer-badge">Populaire</div>
                        <div class="offer-image">
                            <img src="../img/1760095988157.webp" alt="Big Mac">
                        </div>
                        <div class="offer-content">
                            <h3>Pack VP1</h3>
                            <div class="offer-price">
                                <span class="price-amount">20,000 MGA - 50,000 MGA</span>
                                <span class="price-label">Investissement</span>
                            </div>
                            <div class="offer-benefits">
                                <div class="benefit-item">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    <span>10% de gains par jour</span>
                                </div>
                                <div class="benefit-item">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    <span>Durée: 30 jours</span>
                                </div>
                                <div class="benefit-item">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    <span>Gain total: 60,000 Ar</span>
                                </div>
                            </div>
                            <button class="buy-btn" onclick="buyOffer(&#39;VP1&#39;, 20000)">
                                Acheter Maintenant
                            </button>
                        </div>
                    </div>

                    <div class="offer-card featured">
                        <div class="offer-badge premium">Meilleur Choix</div>
                        <div class="offer-image">
                            <img src="../img/1760095988170.webp" alt="Menu Deluxe">
                        </div>
                        <div class="offer-content">
                            <h3>Pack VP2</h3>
                            <div class="offer-price">
                                <span class="price-amount">60,000 MGA - 100,000 MGA</span>
                                <span class="price-label">Investissement</span>
                            </div>
                            <div class="offer-benefits">
                                <div class="benefit-item">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    <span>10% de gains par jour</span>
                                </div>
                                <div class="benefit-item">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    <span>Durée: 30 jours</span>
                                </div>
                                <div class="benefit-item">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    <span>Gain total: 120,000 Ar</span>
                                </div>
                                <div class="benefit-item">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    <span>Bonus: +5,000 Ar</span>
                                </div>
                            </div>
                            <button class="buy-btn" onclick="buyOffer(&#39;VP2&#39;, 40000)">
                                Acheter Maintenant
                            </button>
                        </div>
                    </div>

                    <div class="offer-card">
                        <div class="offer-badge vip">VIP</div>
                        <div class="offer-image">
                            <img src="../img/1760095988165.jpg" alt="Family Box">
                        </div>
                        <div class="offer-content">
                            <h3>Pack VP3</h3>
                            <div class="offer-price">
                                <span class="price-amount">130,000 MGA - 200,000 MGA</span>
                                <span class="price-label">Investissement</span>
                            </div>
                            <div class="offer-benefits">
                                <div class="benefit-item">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    <span>10% de gains par jour</span>
                                </div>
                                <div class="benefit-item">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    <span>Durée: 30 jours</span>
                                </div>
                                <div class="benefit-item">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    <span>Gain total: 180,000 Ar</span>
                                </div>
                                <div class="benefit-item">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    <span>Bonus: +10,000 Ar</span>
                                </div>
                                <div class="benefit-item">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    <span>Support prioritaire</span>
                                </div>
                            </div>
                            <button class="buy-btn" onclick="buyOffer(&#39;VP3&#39;, 60000)">
                                Acheter Maintenant
                            </button>
                        </div>
                    </div>
                </div>

                <div class="info-section">
                    <h3>Comment ça marche ?</h3>
                    <div class="steps-grid">
                        <div class="step-card">
                            <div class="step-number">1</div>
                            <h4>Choisissez votre pack</h4>
                            <p>Sélectionnez l'offre qui correspond à votre budget</p>
                        </div>
                        <div class="step-card">
                            <div class="step-number">2</div>
                            <h4>Investissez</h4>
                            <p>Effectuez votre achat en toute sécurité</p>
                        </div>
                        <div class="step-card">
                            <div class="step-number">3</div>
                            <h4>Gagnez quotidiennement</h4>
                            <p>Recevez 10% de gains chaque jour pendant 30 jours en accomplissant les tâches disponibles ou en parainnant</p>
                        </div>
                        <div class="step-card">
                            <div class="step-number">4</div>
                            <h4>Retirez vos gains</h4>
                            <p>Retirez vos bénéfices à tout moment</p>
                        </div>                       
                    </div>
                </div>
            </section>

            <section id="profile" class="section">
                <div class="section-header">
                    <h1>Mon Profil</h1>
                    <p>Gérez vos informations personnelles</p>
                </div>

                <div class="profile-container">
                    <div class="profile-photo-section">
                        <div class="profile-photo-large">
                            <img id="profilePhotoPreview" src="./McDonald&#39;s Investment - Dashboard_files/placeholder.svg" alt="Profile">
                            <button class="change-photo-btn" onclick="document.getElementById(&#39;photoInput&#39;).click()">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                                    <circle cx="12" cy="13" r="4"></circle>
                                </svg>
                                Changer la photo
                            </button>
                            <input type="file" id="photoInput" accept="image/*" style="display: none;" onchange="previewPhoto(event)">
                        </div>
                        <div class="profile-info-summary">
                            <h3>Jean Dupont</h3>
                            <p>Membre depuis Janvier 2025</p>
                        </div>
                    </div>

                    <div class="profile-forms">
                        <div class="profile-form-card">
                            <h3>Modifier le Numéro de Téléphone</h3>
                            <form id="phoneForm">
                                <div class="form-group">
                                    <label for="currentPhone">Numéro Actuel</label>
                                    <input type="tel" id="currentPhone" value="034 12 345 67" disabled="">
                                </div>
                                <div class="form-group">
                                    <label for="newPhone">Nouveau Numéro</label>
                                    <input type="tel" id="newPhone" placeholder="Ex: 034 98 765 43" required="">
                                </div>
                                <div class="form-group">
                                    <label for="phonePassword">Mot de Passe (pour confirmation)</label>
                                    <input type="password" id="phonePassword" placeholder="Entrez votre mot de passe" required="">
                                </div>
                                <button type="submit" class="submit-btn">
                                    <span>Mettre à Jour</span>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </button>
                            </form>
                        </div>

                        <div class="profile-form-card">
                            <h3>Modifier le Mot de Passe</h3>
                            <form id="passwordForm">
                                <div class="form-group">
                                    <label for="currentPassword">Mot de Passe Actuel</label>
                                    <div class="password-input-wrapper">
                                        <input type="password" id="currentPassword" placeholder="Entrez votre mot de passe actuel" required="">
                                        <button type="button" class="toggle-password" onclick="togglePasswordVisibility(&#39;currentPassword&#39;)">
                                            <svg class="eye-open" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                            <svg class="eye-closed" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display: none;">
                                                <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                                                <line x1="1" y1="1" x2="23" y2="23"></line>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="newPassword">Nouveau Mot de Passe</label>
                                    <div class="password-input-wrapper">
                                        <input type="password" id="newPassword" placeholder="Entrez votre nouveau mot de passe" required="">
                                        <button type="button" class="toggle-password" onclick="togglePasswordVisibility(&#39;newPassword&#39;)">
                                            <svg class="eye-open" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                            <svg class="eye-closed" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display: none;">
                                                <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                                                <line x1="1" y1="1" x2="23" y2="23"></line>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="confirmPassword">Confirmer le Nouveau Mot de Passe</label>
                                    <div class="password-input-wrapper">
                                        <input type="password" id="confirmPassword" placeholder="Confirmez votre nouveau mot de passe" required="">
                                        <button type="button" class="toggle-password" onclick="togglePasswordVisibility(&#39;confirmPassword&#39;)">
                                            <svg class="eye-open" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                            <svg class="eye-closed" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display: none;">
                                                <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                                                <line x1="1" y1="1" x2="23" y2="23"></line>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <button type="submit" class="submit-btn">
                                    <span>Mettre à Jour</span>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <script src="../scripts/home-script.js"></script>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>


</body></html>