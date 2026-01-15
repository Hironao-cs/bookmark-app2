<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A高校 オフィシャルグッズストア</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <header class="header">
        <div class="container">
            <h1 class="logo">A高校 Official Store</h1>
            <nav class="nav">
                <a href="#products">商品一覧</a>
                <a href="select.php">登録一覧</a>
                <a href="#about">About</a>
                <a href="#contact">お問い合わせ</a>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h2>A高校 オフィシャルグッズ</h2>
            <p>校章とスクールカラーが映えるアイテムをお届けします</p>
        </div>
    </section>

    <section id="products" class="products-section">
        <div class="container">
            <h2 class="section-title">商品一覧</h2>
            <div class="products-grid">
                
                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="img/hoodie.png" alt="A高校 パーカー" class="product-image">
                        <button class="bookmark-btn" data-product="パーカー" title="お気に入りに追加">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">A HIGH SCHOOL パーカー</h3>
                        <p class="product-price">¥5,800</p>
                        <button class="add-to-cart-btn">カートに追加</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="img/tee.png" alt="A高校 Tシャツ" class="product-image">
                        <button class="bookmark-btn" data-product="Tシャツ" title="お気に入りに追加">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">A高校 オリジナルTシャツ</h3>
                        <p class="product-price">¥3,200</p>
                        <button class="add-to-cart-btn">カートに追加</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="img/cap.png" alt="A高校 キャップ" class="product-image">
                        <button class="bookmark-btn" data-product="キャップ" title="お気に入りに追加">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">A高校 キャップ</h3>
                        <p class="product-price">¥2,800</p>
                        <button class="add-to-cart-btn">カートに追加</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="img/sticker.png" alt="A高校 ステッカー" class="product-image">
                        <button class="bookmark-btn" data-product="ステッカー" title="お気に入りに追加">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">A高校 ステッカーセット</h3>
                        <p class="product-price">¥800</p>
                        <button class="add-to-cart-btn">カートに追加</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div id="bookmarkModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2>お気に入り登録</h2>
            <p class="modal-description">この商品をお気に入り登録していただけますか?</p>
            <form id="bookmarkForm">
                <div class="form-group">
                    <label for="userName">お名前 <span class="required">*</span></label>
                    <input type="text" id="userName" name="name" required placeholder="山田太郎">
                </div>
                <div class="form-group">
                    <label for="userEmail">メールアドレス</label>
                    <input type="email" id="userEmail" name="email" placeholder="example@email.com">
                </div>
                <div class="form-group">
                    <label for="userGrade">学年・属性</label>
                    <select id="userGrade" name="grade">
                        <option value="">選択してください</option>
                        <option value="1年生">1年生</option>
                        <option value="2年生">2年生</option>
                        <option value="3年生">3年生</option>
                        <option value="保護者">保護者</option>
                        <option value="卒業生">卒業生</option>
                        <option value="その他">その他</option>
                    </select>
                </div>
                <input type="hidden" id="productName" name="product" value="">
                <input type="hidden" name="datetime" id="datetime" value="">
                <div class="form-actions">
                    <button type="button" class="cancel-btn">キャンセル</button>
                    <button type="submit" class="submit-btn">登録する</button>
                </div>
            </form>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2026 A高校 Official Store. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>