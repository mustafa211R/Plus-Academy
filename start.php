<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>منصة A+ - البدء</title>
    
    <!-- الروابط كما طلبت -->
    <link href="package/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="webfonts/fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="logo.jpg">

    <style>
        /* إضافات خاصة بصفحة البدء */
        .form-container {
            max-width: 500px;
            margin: 0 auto;
        }
        
        .toggle-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .toggle-btn {
            padding: 12px 30px;
            border: 2px solid #8b5cf6;
            border-radius: 50px;
            background: transparent;
            color: #8b5cf6;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .toggle-btn.active {
            background: linear-gradient(to right, #8b5cf6, #3b82f6);
            color: white;
        }
        
        .form-section {
            display: none;
        }
        
        .form-section.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .input-group {
            margin-bottom: 20px;
        }
        
        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #4b5563;
        }
        
        body.dark-theme .input-group label {
            color: #e5e7eb;
        }
        
        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.3s;
            background: rgba(255,255,255,0.9);
        }
        
        body.dark-theme .form-input {
            background: rgba(30,27,75,0.8);
            border-color: rgba(255,255,255,0.2);
            color: white;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #8b5cf6;
            box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.1);
        }
        
        .switch-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 15px 0;
        }
        
        .switch-label {
            font-size: 14px;
            font-weight: 600;
        }
        
        .preview-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 3px solid #8b5cf6;
            object-fit: cover;
            margin: 10px auto;
            display: none;
        }
        
        .upload-area {
            border: 2px dashed #8b5cf6;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            cursor: pointer;
            margin: 20px 0;
            transition: all 0.3s;
        }
        
        .upload-area:hover {
            background: rgba(139, 92, 246, 0.1);
        }
        
        .upload-icon {
            font-size: 40px;
            color: #8b5cf6;
            margin-bottom: 10px;
        }
        
        .password-container {
            position: relative;
        }
        
        .password-toggle {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #6b7280;
            cursor: pointer;
        }
        
        .generated-field {
            background: #f3f4f6;
            padding: 12px;
            border-radius: 8px;
            font-family: monospace;
            text-align: center;
            font-weight: bold;
        }
        
        body.dark-theme .generated-field {
            background: rgba(30,27,75,0.6);
        }
        
        .btn-submit {
            width: 100%;
            padding: 15px;
            background: linear-gradient(to right, #8b5cf6, #3b82f6);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 20px;
        }
        
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(139, 92, 246, 0.3);
        }
        
        .hidden-file-input {
            display: none;
        }
        
        .teacher-code {
            letter-spacing: 3px;
            font-size: 20px;
            text-align: center;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col items-center justify-center font-cairo p-4 transition-all duration-300">

    <!-- الشريط العلوي -->
    <header class="header-bar fixed top-0 left-0 right-0 z-50 py-3 px-6 flex justify-between items-center">
        <div class="flex items-center space-x-2 space-x-reverse">
            <button id="aboutBtn" class="text-white hover:text-purple-200 transition-colors flex items-center gap-2">
                <i class="fas fa-info-circle text-lg"></i> حول
            </button>
        </div>

        <div class="flex items-center space-x-4 space-x-reverse">
            <!-- Toggle Switch -->
            <label class="switch">
                <input type="checkbox" id="themeSwitch">
                <span class="slider round"></span>
            </label>
        </div>
    </header>

    <!-- المحتوى الرئيسي -->
    <main class="content-container w-full max-w-4xl mt-20 mb-16">
        <div class="glass-effect rounded-3xl p-6 md:p-10 shadow-2xl">

            <!-- الشعار -->
            <div class="flex flex-col items-center mb-8">
                <div class="relative mb-6">
                    <div class="w-32 h-32 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center">
                        <div class="w-28 h-28 rounded-full bg-white flex items-center justify-center">
                            <span class="text-5xl font-black bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent logo-text">A+</span>
                        </div>
                    </div>
                </div>
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">البدء مع منصة A+</h1>
                <p class="text-gray-600 text-center">اختر طريقة الدخول للمنصة التعليمية</p>
            </div>

            <!-- Toggle بين تسجيل الدخول وإنشاء حساب -->
            <div class="toggle-container">
                <button id="loginToggle" class="toggle-btn active">
                    <i class="fas fa-sign-in-alt"></i> تسجيل الدخول
                </button>
                <button id="registerToggle" class="toggle-btn">
                    <i class="fas fa-user-plus"></i> إنشاء حساب
                </button>
            </div>

            <!-- قسم تسجيل الدخول -->
            <div id="loginSection" class="form-section active form-container">
                <form id="loginForm">
                    <!-- Toggle بين طالب ومدرس -->
                    <div class="switch-container mb-6">
                        <span class="switch-label">طالب</span>
                        <label class="switch">
                            <input type="checkbox" id="userTypeSwitch">
                            <span class="slider round"></span>
                        </label>
                        <span class="switch-label">مدرس</span>
                    </div>

                    <!-- حقول تسجيل الدخول للطالب -->
                    <div id="studentLoginFields">
                        <div class="input-group">
                            <label for="studentUsername">اسم المستخدم:</label>
                            <input type="text" id="studentUsername" name="studentUsername" class="form-input" placeholder="أدخل اسم المستخدم" required>
                        </div>
                        
                        <div class="input-group">
                            <label for="studentPassword">كلمة المرور:</label>
                            <div class="password-container">
                                <input type="password" id="studentPassword" name="studentPassword" class="form-input pr-12" placeholder="أدخل كلمة المرور" minlength="6" required>
                                <button type="button" class="password-toggle" onclick="togglePassword('studentPassword')">
                                    <i class="far fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- حقول تسجيل الدخول للمدرس -->
                    <div id="teacherLoginFields" style="display: none;">
                        <div class="input-group">
                            <label for="teacherCode">الرقم المشفر للمدرس:</label>
                            <input type="password" id="teacherCode" name="teacherCode" class="form-input teacher-code" placeholder="••••••••" maxlength="8" required>
                            <small class="text-gray-500 text-sm">رقم سري مكون من 8 أرقام</small>
                        </div>
                    </div>

                    <button type="submit" class="btn-submit">
                        <i class="fas fa-sign-in-alt"></i> دخول إلى المنصة
                    </button>
                </form>
            </div>

            <!-- قسم إنشاء حساب -->
            <div id="registerSection" class="form-section form-container">
                <form id="registerForm">
                    <div class="input-group">
                        <label for="studentName">اسم الطالب الكامل:</label>
                        <input type="text" id="studentName" name="studentName" class="form-input" placeholder="أدخل الاسم الكامل" required>
                    </div>
                    
                    <div class="input-group">
                        <label for="studentAge">العمر:</label>
                        <input type="number" id="studentAge" name="studentAge" class="form-input" min="5" max="70" placeholder="أدخل العمر" required>
                    </div>
                    
                    <div class="input-group">
                        <label for="governorate">المحافظة:</label>
                        <select id="governorate" name="governorate" class="form-input" required>
                            <option value="">اختر المحافظة</option>
                            <option value="baghdad">بغداد</option>
                            <option value="basra">البصرة</option>
                            <option value="mosul">الموصل</option>
                            <option value="erbil">أربيل</option>
                            <option value="sulaymaniyah">السليمانية</option>
                            <option value="kirkuk">كركوك</option>
                            <option value="najaf">النجف</option>
                            <option value="karbala">كربلاء</option>
                            <option value="diwaniyah">الديوانية</option>
                            <option value="wasit">واسط</option>
                            <option value="dhiqar">ذي قار</option>
                            <option value="maysan">ميسان</option>
                            <option value="anbar">الأنبار</option>
                            <option value="nineveh">نينوى</option>
                            <option value="saladin">صلاح الدين</option>
                        </select>
                    </div>
                    
                    <div class="input-group">
                        <label for="phone">رقم الهاتف:</label>
                        <input type="tel" id="phone" name="phone" class="form-input" placeholder="07XXXXXXXXX" pattern="07[0-9]{9}" required>
                    </div>
                    
                    <div class="input-group">
                        <label for="grade">المرحلة الدراسية:</label>
                        <select id="grade" name="grade" class="form-input" required>
                            <option value="">اختر المرحلة</option>
                            <option value="1">الصف الأول ابتدائي</option>
                            <option value="2">الصف الثاني ابتدائي</option>
                            <option value="3">الصف الثالث ابتدائي</option>
                            <option value="4">الصف الرابع ابتدائي</option>
                            <option value="5">الصف الخامس ابتدائي</option>
                            <option value="6">الصف السادس ابتدائي</option>
                            <option value="7">الصف الأول متوسط</option>
                            <option value="8">الصف الثاني متوسط</option>
                            <option value="9">الصف الثالث متوسط</option>
                            <option value="10">الصف الأول إعدادي</option>
                            <option value="11">الصف الثاني إعدادي</option>
                            <option value="12">الصف الثالث إعدادي</option>
                        </select>
                    </div>
                    
                    <!-- Toggle Switches للإضافات -->
                    <div class="switch-container">
                        <span class="switch-label">هل أنت من ذوي شهداء الحشد الشعبي؟</span>
                        <label class="switch">
                            <input type="checkbox" id="martyrsSwitch" name="martyrsFamily">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    
                    <div class="switch-container">
                        <span class="switch-label">هل أنت من منتمين لمؤسسة العين؟</span>
                        <label class="switch">
                            <input type="checkbox" id="aynSwitch" name="aynMember">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    
                    <!-- رفع الصورة -->
                    <div class="input-group">
                        <label>صورة الطالب:</label>
                        <div class="upload-area" onclick="document.getElementById('photoInput').click()">
                            <div class="upload-icon">
                                <i class="fas fa-arrow-up-from-bracket"></i>
                            </div>
                            <p>انقر لرفع الصورة</p>
                            <small>يسمح بصيغة JPG فقط</small>
                        </div>
                        <input type="file" id="photoInput" class="hidden-file-input" accept=".jpg,.jpeg" onchange="previewImage(event)">
                        <img id="imagePreview" class="preview-image" alt="معاينة الصورة">
                    </div>
                    
                    <!-- الحقول التلقائية -->
                    <div class="input-group">
                        <label>اسم المستخدم (تلقائي):</label>
                        <div id="usernameDisplay" class="generated-field">
                            سيظهر هنا بعد إدخال البيانات
                        </div>
                    </div>
                    
                    <div class="input-group">
                        <label for="password">كلمة المرور:</label>
                        <div class="password-container">
                            <input type="password" id="password" name="password" class="form-input pr-12" placeholder="أدخل كلمة المرور (6 أحرف على الأقل)" minlength="6" required oninput="checkPassword()">
                            <button type="button" class="password-toggle" onclick="togglePassword('password')">
                                <i class="far fa-eye"></i>
                            </button>
                        </div>
                        <div id="passwordStrength" class="text-sm mt-2 hidden">
                            <span class="text-red-500" id="passwordError"></span>
                        </div>
                    </div>
                    
                    <div class="input-group">
                        <label for="confirmPassword">تأكيد كلمة المرور:</label>
                        <div class="password-container">
                            <input type="password" id="confirmPassword" name="confirmPassword" class="form-input pr-12" placeholder="أعد إدخال كلمة المرور" minlength="6" required oninput="checkPasswordMatch()">
                            <button type="button" class="password-toggle" onclick="togglePassword('confirmPassword')">
                                <i class="far fa-eye"></i>
                            </button>
                        </div>
                        <div id="passwordMatch" class="text-sm mt-2 hidden"></div>
                    </div>
                    
                    <button type="submit" class="btn-submit">
                        <i class="fas fa-user-plus"></i> إنشاء حساب جديد
                    </button>
                </form>
            </div>
            
            <!-- زر العودة للصفحة الرئيسية -->
            <div class="text-center mt-8">
                <a href="index.html" class="text-purple-600 hover:text-purple-800 font-medium">
                    <i class="fas fa-arrow-right ml-2"></i> العودة للصفحة الرئيسية
                </a>
                    <div class="text-center mt-8">
                <a href="home.php" class="text-purple-600 hover:text-purple-800 font-medium">
                    <i class="fas fa-arrow-left ml-2"></i>  التقدم  
                </a>
            </div>
            </div>
        </div>
    </main>

    <!-- الشريط السفلي -->
    <footer class="footer-bar">
        جميع الحقوق محفوظة © 2025 | مطور بواسطة A+
    </footer>

    <!-- نافذة حول المنصة -->
    <div id="aboutModal" class="modal-overlay fixed inset-0 z-50 flex items-center justify-center p-4 hidden">
        <div class="modal-content">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">حول منصة A+</h2>
                <button id="closeModal" class="text-gray-500 hover:text-gray-700 text-2xl">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <p class="mb-4 leading-relaxed">
                منصة A+ هي بيئة تعليمية متكاملة تهدف إلى مساعدة الطلاب على تحقيق التفوق الأكاديمي من خلال تقديم محتوى تعليمي متميز واختبارات تقييمية ذكية.
            </p>
            <div class="flex justify-center mt-6">
                <button id="closeModalBtn" class="px-6 py-3 bg-gradient-to-r from-purple-500 to-blue-500 text-white font-bold rounded-xl hover:opacity-90 transition-opacity">
                    فهمت، شكراً!
                </button>
            </div>
        </div>
    </div>

    <!-- ملفات JS -->
    <script src="theme.js"></script>
    <script>
        // بيانات الترجمة من العربية إلى الإنجليزية
        const arabicToEnglish = {
            "ا": "a", "ب": "b", "ت": "t", "ث": "th", "ج": "j",
            "ح": "h", "خ": "kh", "د": "d", "ذ": "dh", "ر": "r",
            "ز": "z", "س": "s", "ش": "sh", "ص": "s", "ض": "d",
            "ط": "t", "ظ": "z", "ع": "a", "غ": "gh", "ف": "f",
            "ق": "q", "ك": "k", "ل": "l", "م": "m", "ن": "n",
            "ه": "h", "و": "w", "ي": "y"
        };

        // التبديل بين تسجيل الدخول وإنشاء حساب
        document.getElementById('loginToggle').addEventListener('click', function() {
            this.classList.add('active');
            document.getElementById('registerToggle').classList.remove('active');
            document.getElementById('loginSection').classList.add('active');
            document.getElementById('registerSection').classList.remove('active');
        });

        document.getElementById('registerToggle').addEventListener('click', function() {
            this.classList.add('active');
            document.getElementById('loginToggle').classList.remove('active');
            document.getElementById('registerSection').classList.add('active');
            document.getElementById('loginSection').classList.remove('active');
        });

        // التبديل بين طالب ومدرس
        document.getElementById('userTypeSwitch').addEventListener('change', function() {
            if (this.checked) {
                document.getElementById('studentLoginFields').style.display = 'none';
                document.getElementById('teacherLoginFields').style.display = 'block';
            } else {
                document.getElementById('studentLoginFields').style.display = 'block';
                document.getElementById('teacherLoginFields').style.display = 'none';
            }
        });

        // توليد اسم المستخدم تلقائياً
        function generateUsername() {
            const name = document.getElementById('studentName').value.trim();
            const age = document.getElementById('studentAge').value;
            
            if (name && age) {
                // أخذ أول حرف من الاسم
                const firstLetter = name.charAt(0);
                // أخذ آخر حرف من الاسم
                const lastLetter = name.charAt(name.length - 1);
                
                // تحويل الأحرف العربية إلى إنجليزية
                const firstEng = arabicToEnglish[firstLetter] || firstLetter;
                const lastEng = arabicToEnglish[lastLetter] || lastLetter;
                
                // توليد ID عشوائي
                const randomId = Math.floor(1000 + Math.random() * 9000);
                
                // اسم المستخدم النهائي
                const username = firstEng.toLowerCase() + lastEng.toLowerCase() + age + randomId;
                document.getElementById('usernameDisplay').textContent = username;
            }
        }

        // ربط الأحداث
        document.getElementById('studentName').addEventListener('input', generateUsername);
        document.getElementById('studentAge').addEventListener('input', generateUsername);

        // عرض معاينة الصورة
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('imagePreview');
            
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        // إظهار/إخفاء كلمة المرور
        function togglePassword(fieldId) {
            const field = document.getElementById(fieldId);
            const toggleBtn = field.nextElementSibling;
            const icon = toggleBtn.querySelector('i');
            
            if (field.type === 'password') {
                field.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                field.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }

        // التحقق من قوة كلمة المرور
        function checkPassword() {
            const password = document.getElementById('password').value;
            const strengthDiv = document.getElementById('passwordStrength');
            const errorSpan = document.getElementById('passwordError');
            
            if (password.length > 0) {
                strengthDiv.classList.remove('hidden');
                
                if (password.length < 6) {
                    errorSpan.textContent = 'كلمة المرور يجب أن تكون 6 أحرف على الأقل';
                    errorSpan.className = 'text-red-500';
                } else {
                    errorSpan.textContent = 'كلمة المرور جيدة ✓';
                    errorSpan.className = 'text-green-500';
                }
            } else {
                strengthDiv.classList.add('hidden');
            }
        }

        // التحقق من تطابق كلمات المرور
        function checkPasswordMatch() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const matchDiv = document.getElementById('passwordMatch');
            
            if (confirmPassword.length > 0) {
                matchDiv.classList.remove('hidden');
                
                if (password === confirmPassword) {
                    matchDiv.innerHTML = '<span class="text-green-500">كلمات المرور متطابقة ✓</span>';
                } else {
                    matchDiv.innerHTML = '<span class="text-red-500">كلمات المرور غير متطابقة</span>';
                }
            } else {
                matchDiv.classList.add('hidden');
            }
        }

        // منع إرسال النماذج (لأننا نهتم بالتصميم فقط حالياً)
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('نموذج تسجيل الدخول جاهز! (سيتم الإرسال إلى login.php لاحقاً)');
        });

        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('نموذج إنشاء الحساب جاهز! (سيتم الإرسال إلى create.php لاحقاً)');
        });

        // إظهار/إخفاء كلمة المرور للمدرس
        document.getElementById('teacherCode').addEventListener('focus', function() {
            this.type = 'password';
        });

        document.getElementById('teacherCode').addEventListener('blur', function() {
            if (this.value === '') {
                this.type = 'password';
            }
        });
    </script>
</body>
</html>