# 🦷 Dentix - Diş Kliniği Yönetim Sistemi

Bu proje, diş kliniklerinin günlük operasyonlarını dijitalleştirmek için geliştirilmiş kapsamlı bir web tabanlı yönetim sistemidir. PHP, MySQL ve modern web teknolojileri kullanılarak tasarlanmıştır.

## 🎯 Proje Amacı

Dentix, diş kliniklerinin hasta kayıtlarını, randevu sistemlerini, tedavi süreçlerini ve genel klinik yönetimini dijital ortamda yönetmelerini sağlayan kullanıcı dostu bir platformdur. Geleneksel kağıt tabanlı sistemlerin yerini alarak verimliliği artırır.

## ✨ Ana Özellikler

### 🔐 Çoklu Kullanıcı Sistemi
- **Yönetici Paneli**: Klinik personeli için tam yetki sistemi
- **Hasta/Üye Sistemi**: Hastaların kendi bilgilerini yönetebilmesi
- **Güvenli Oturum Yönetimi**: Session tabanlı güvenlik
- **Şifre Korumalı Erişim**: Yetkisiz kullanımı önleme

### 📅 Randevu Yönetim Sistemi
- **Online Randevu Alma**: Hastalar için 7/24 randevu sistemi
- **Otomatik Saat Kontrolü**: Dolu saatlerin otomatik filtrelenmesi
- **Randevu Düzenleme**: Yöneticiler için randevu güncelleme
- **Randevu İptal/Silme**: Esnek randevu yönetimi
- **Tarih-Saat Doğrulama**: Geçmiş tarih engellemesi

### 👥 Hasta Yönetimi
- **Hasta Kayıt Sistemi**: Detaylı hasta bilgi kaydı
- **Hasta Bilgi Güncelleme**: Mevcut kayıtların düzenlenmesi
- **TC Kimlik Doğrulama**: Benzersiz hasta takibi
- **İletişim Bilgileri**: Telefon, e-posta, adres yönetimi

### 📢 İçerik Yönetim Sistemi
- **Duyuru Sistemi**: Klinik duyurularının yayınlanması
- **Hizmet Kategorileri**: Tedavi türlerinin sınıflandırılması
- **SSS Modülü**: Sık sorulan soruların yönetimi
- **Galeri Sistemi**: Klinik fotoğraflarının sergilenmesi

## 🏗️ Teknik Mimari

### Teknolojiler
- **Backend**: PHP 7.4+
- **Database**: MySQL 5.7+
- **Frontend**: HTML, CSS, JavaScript
- **Architecture**: MVC benzeri modüler yapı
- **Security**: Prepared Statements, Session Management

### Veritabanı Yapısı

#### Ana Tablolar
```sql
-- Randevu Yönetimi
randevular (id, tc, ad, soyad, tel, tarih, saat, eposta)
saatler (id, saat)

-- Kullanıcı Yönetimi  
uyeler (id, tc, ad, soyad, tel, adres, dogumtarih, eposta, sifre)
oturum (id, user, password)
hastalar (id, tc, ad, soyad, email, adres, telefon, k_tarih, d_tarih)

-- İçerik Yönetimi
duyurular (id, tarih, baslik, icerik, resim)
kategoriler (id, baslik, icerik, resim)
tedaviler (id, baslik, icerik, url)
sikcasorulansorular (id, baslik, icerik)
klinik (id, resim1, resim2, resim3, resim4)

-- Site Bilgileri
iletisim (id, icerik)
footeryazi (id, yazi)
kayanyazi (id, icerik)
```

### Proje Yapısı
```
dentix/
├── 📁 Root Files/               # Ana sistem dosyaları
│   ├── index.php               # Ana sayfa
│   ├── header.php              # Site başlığı ve menü
│   ├── footer.php              # Site alt bilgi
│   └── baglantiDB.php          # Veritabanı bağlantısı
├── 📁 anasayfa/                # Ana sayfa modülü
│   └── anasayfa.php            # Ana sayfa içeriği
├── 📁 yonetim/                 # Yönetici paneli
│   ├── index.php               # Yönetici giriş
│   ├── randevular.php          # Randevu yönetimi
│   └── hasta/                  # Hasta yönetimi modülü
├── 📁 randevu/                 # Randevu sistemi
│   ├── randevu.php             # Randevu formu 1
│   ├── randevu2.php            # Randevu formu 2
│   └── randevucombosaat.php    # Saat seçim sistemi
├── 📁 klinik/                  # Klinik galeri
├── 📁 tedaviler/               # Tedavi bilgileri
├── 📁 sorulariniz/             # SSS modülü
├── 📁 iletisim/                # İletişim bilgileri
└── 📁 assets/                  # CSS, resim dosyaları
    ├── imaj.css                # Ana stil dosyası
    ├── randevu.css             # Randevu form stilleri
    └── ikonlar/                # Site ikonları
```

## 🎨 Kullanıcı Arayüzü

### Ana Sayfa (index.php)
- **Duyuru Sistemi**: En son duyuruların görüntülenmesi
- **Hizmet Kategorileri**: Tedavi türlerinin tanıtımı
- **Hızlı Erişim**: Randevu, iletişim linkleri
- **Dinamik İçerik**: Veritabanından çekilen güncel bilgiler

### Randevu Sistemi
```php
// Otomatik saat kontrolü
$sorgu2 = $conn->prepare("SELECT saat FROM randevular WHERE tarih = ?");
$sorgu2->bind_param("s", $tarih);
$sorgu2->execute();

// Dolu saatlerin filtrelenmesi
if (!$saatDolu) {
    echo "<option value='".$saat['saat']."'>".$saat['saat']."</option>";
}
```

### Yönetici Paneli Özellikleri
- **Dashboard**: Günlük randevu özeti
- **Randevu Yönetimi**: CRUD işlemleri
- **Hasta Kayıtları**: Detaylı hasta bilgileri
- **Raporlama**: Tarih bazlı filtreleme

## 🔧 Kurulum ve Yapılandırma

### Sistem Gereksinimleri
- **Web Server**: Apache 2.4+ / Nginx 1.18+
- **PHP**: 7.4 veya üzeri
- **MySQL**: 5.7 veya üzeri
- **Extensions**: mysqli, session, date

### Kurulum Adımları

1. **Repository'yi klonlayın:**
```bash
git clone https://github.com/oxygeneafk/dentix.git
cd dentix
```

2. **Web server'ına yükleyin:**
```bash
# Apache için
sudo cp -r dentix/ /var/www/html/

# Nginx için  
sudo cp -r dentix/ /usr/share/nginx/html/
```

3. **Veritabanı yapılandırması:**

`baglantiDB.php` dosyasını düzenleyin:
```php
<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "dentix_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>
```

4. **Veritabanı tablolarını oluşturun:**
```sql
-- Örnek tablo yapıları
CREATE TABLE randevular (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tc VARCHAR(11) NOT NULL,
    ad VARCHAR(50) NOT NULL,
    soyad VARCHAR(50) NOT NULL,
    tel VARCHAR(15) NOT NULL,
    tarih DATE NOT NULL,
    saat TIME NOT NULL,
    eposta VARCHAR(100) NOT NULL
);

CREATE TABLE uyeler (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tc VARCHAR(11) UNIQUE NOT NULL,
    ad VARCHAR(50) NOT NULL,
    soyad VARCHAR(50) NOT NULL,
    tel VARCHAR(15),
    adres TEXT,
    dogumtarih DATE,
    eposta VARCHAR(100),
    sifre VARCHAR(255) NOT NULL
);
```

5. **Dosya izinlerini ayarlayın:**
```bash
sudo chown -R www-data:www-data dentix/
sudo chmod -R 755 dentix/
```

## 📋 Kullanım Kılavuzu

### Hasta/Üye İşlemleri

#### Üye Olma
1. Ana sayfada "Üye Ol" butonuna tıklayın
2. Gerekli bilgileri doldurun:
   - TC Kimlik No
   - Ad, Soyad
   - Telefon, E-posta
   - Adres, Doğum Tarihi
   - Şifre
3. Formu gönderin

#### Randevu Alma
1. "Online Randevu" menüsüne gidin
2. İlk adımda tarih seçin
3. İkinci adımda:
   - Kişisel bilgileri girin
   - Müsait saatlerden birini seçin
   - E-posta adresini girin
4. Randevuyu onaylayın

### Yönetici İşlemleri

#### Yönetici Girişi
1. "Yönetici Girişi" linkine tıklayın
2. Kullanıcı adı ve şifre girin
3. Dashboard'a yönlendirilirsiniz

#### Randevu Yönetimi
```php
// Günlük randevu listesi
include "baglantiDB.php";
$bugun = date("Y-m-d");
$sorgu = "SELECT * FROM randevular WHERE tarih = '$bugun'";
```

#### Hasta Yönetimi
- **Yeni Hasta Ekleme**: Detaylı hasta kartı oluşturma
- **Hasta Bilgi Güncelleme**: Mevcut kayıtları düzenleme
- **Hasta Arama**: TC, ad, soyad bazlı arama

## 🔒 Güvenlik Özellikleri

### Veri Güvenliği
```php
// Prepared Statements kullanımı
$stmt = $conn->prepare("SELECT * FROM uyeler WHERE tc = ? AND sifre = ?");
$stmt->bind_param("ss", $tc, $sifre);
$stmt->execute();

// XSS koruması
echo htmlspecialchars($satir["icerik"]);

// SQL Injection koruması
$tc = mysqli_real_escape_string($conn, $_POST["tc"]);
```

### Oturum Yönetimi
```php
// Session kontrolü
session_start();
if(!$_SESSION['oturum']==true) {
    header("Location:index.php");
}

// Güvenli çıkış
session_destroy();
header("Location:index.php");
```

### Veri Doğrulama
- **TC Kimlik Kontrolü**: 11 haneli doğrulama
- **E-posta Formatı**: HTML5 email validation
- **Telefon Doğrulama**: Rakam kontrolü
- **Tarih Kontrolü**: Geçmiş tarih engelleme

## 📊 Veritabanı Optimizasyonları

### İndeks Yapısı
```sql
-- Performans için önemli indeksler
CREATE INDEX idx_randevu_tarih ON randevular(tarih);
CREATE INDEX idx_randevu_tc ON randevular(tc);
CREATE INDEX idx_uye_tc ON uyeler(tc);
CREATE INDEX idx_duyuru_tarih ON duyurular(tarih);
```

### Sorgu Optimizasyonu
```php
// Limit kullanımı
$limit = "LIMIT 3";
$soruDuyurular = mysqli_query($conn, "SELECT * FROM duyurular ORDER BY tarih DESC $limit");

// Sayfalama için
$offset = ($page - 1) * $limit;
$sorgu = "SELECT * FROM randevular LIMIT $limit OFFSET $offset";
```

## 🎯 Öne Çıkan Özellikler

### Otomatik Randevu Kontrolü
```php
// Geçmiş tarih kontrolü
$simditarih = date("Y-m-d");
$simdisaat = date("H:i:s");

if ($simditarih > $tarih) {
    echo "<script>alert('Bu tarihte randevu alınamaz!!!');</script>";
}
```

### Dinamik Saat Yönetimi
```php
// Dolu saatlerin otomatik filtrelenmesi
$saatDolu = false;
while ($satir2 = $sonuc2->fetch_assoc()) {
    if ($saat["saat"] === $satir2["saat"]) {
        $saatDolu = true;
        break;
    }
}
```

### Responsive Tasarım
- **Mobile-First**: Mobil cihazlar için optimize
- **Flexible Layout**: Tüm ekran boyutlarında uyum
- **Touch-Friendly**: Dokunmatik arayüz desteği

## 🔮 Gelecek Geliştirmeler

### Kısa Vadeli Hedefler
- [ ] **SMS Bildirimi**: Randevu hatırlatmaları
- [ ] **E-posta Sistemi**: Otomatik bildirimler
- [ ] **Ödeme Entegrasyonu**: Online ödeme sistemi
- [ ] **Randevu Takvihi**: Görsel takvim arayüzü
- [ ] **Hasta Dosyası**: Dijital sağlık kayıtları

### Uzun Vadeli Planlar
- [ ] **Mobile App**: iOS/Android uygulaması
- [ ] **API Geliştirme**: RESTful API desteği
- [ ] **Cloud Backup**: Otomatik yedekleme sistemi
- [ ] **Analytics Dashboard**: Detaylı raporlama
- [ ] **Multi-Clinic**: Çoklu klinik desteği
- [ ] **Telemedicine**: Online konsültasyon

### Teknik İyileştirmeler
- [ ] **Framework Migration**: Laravel/CodeIgniter
- [ ] **Database Optimization**: Redis cache
- [ ] **Security Enhancement**: 2FA, JWT
- [ ] **Performance**: CDN, image optimization
- [ ] **Testing**: Unit tests, integration tests

## 🎨 UI/UX Geliştirmeleri

### Tasarım Planları
- [ ] **Modern UI**: Bootstrap 5 entegrasyonu
- [ ] **Dark Mode**: Gece modu seçeneği
- [ ] **Accessibility**: WCAG 2.1 uyumluluğu
- [ ] **Animations**: Smooth transitions
- [ ] **Icons**: Font Awesome integration

### Kullanıcı Deneyimi
- [ ] **Loading States**: Progress indicators
- [ ] **Error Handling**: User-friendly error messages
- [ ] **Form Validation**: Real-time validation
- [ ] **Search Enhancement**: Auto-complete
- [ ] **Notifications**: Toast messages

## 📱 Platform Desteği

### Tarayıcı Uyumluluğu
- ✅ **Chrome**: 80+
- ✅ **Firefox**: 75+
- ✅ **Safari**: 13+
- ✅ **Edge**: 80+
- ⚠️ **IE**: Sınırlı destek

### Cihaz Desteği
- ✅ **Desktop**: Full functionality
- ✅ **Tablet**: Responsive design
- ✅ **Mobile**: Optimized layout
- ✅ **Touch Devices**: Touch-friendly

## 🤝 Katkıda Bulunma

### Geliştirme Süreci
1. **Fork** edin
2. **Feature branch** oluşturun (`git checkout -b feature/amazing-feature`)
3. **Commit** edin (`git commit -m 'Add amazing feature'`)
4. **Push** edin (`git push origin feature/amazing-feature`)
5. **Pull Request** açın

### Kod Standartları
- **PSR-12**: PHP coding standards
- **Clean Code**: Readable, maintainable code
- **Documentation**: Comprehensive comments
- **Security**: OWASP best practices
- **Testing**: Test coverage minimum %80

### Önemli Dosyalar
```php
// baglantiDB.php - Veritabanı bağlantısı
$conn = new mysqli($servername, $username, $password, $dbname);

// header.php - Site başlığı ve navigasyon
include "baglantiDB.php";

// Session yönetimi
session_start();
if(!$_SESSION['oturum']==true) {
    header("Location:index.php");
}
```

## 📞 İletişim ve Destek

### Geliştirici Bilgileri
**Developer**: oxygeneafk
- **GitHub**: [@oxygeneafk](https://github.com/oxygeneafk)
- **Project Link**: [https://github.com/oxygeneafk/dentix](https://github.com/oxygeneafk/dentix)
- **Stars**: ⭐ 1

### Destek Kanalları
- **Issues**: GitHub Issues sayfası
- **Documentation**: README ve Wiki
- **Community**: Discussions bölümü

## 📄 Lisans ve Telif Hakkı

Bu proje açık kaynak kodludur ve eğitim amaçlı geliştirilmiştir.

```
© Copyright 2024 Diş Polikliniği
Geliştirici: oxygeneafk
```

## 🙏 Teşekkürler

Bu projeyi kullanan ve geliştirmesine katkıda bulunan herkese teşekkürler!

### Özel Teşekkürler
- PHP ve MySQL topluluğuna
- Open source katkıcılarına
- Beta test kullanıcılarına

---

**⭐ Bu projeyi beğendiyseniz yıldız vermeyi unutmayın!**

> "Sağlık teknolojisinin geleceğini bugünden inşa ediyoruz" - Dentix, modern diş kliniklerinin dijital dönüşüm partneridir.

### Son Güncelleme
- **Proje Oluşturma**: 43 gün önce
- **Son Commit**: 19 Mayıs 2025
- **Dil Dağılımı**: PHP %83.2, Hack %12.5, CSS %4.3
- **Repository ID**: 986607712
