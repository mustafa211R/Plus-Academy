  // تحديث دالة عرض نافذة الدفع
    function showPaymentModal(courseId) {
        const course = courses.find(c => c.id === courseId);
        if (!course) return;
        
        // تحديث البيانات
        document.getElementById('paymentCourseImage').src = course.image;
        document.getElementById('paymentCourseName').textContent = course.title;
        document.getElementById('paymentSubject').textContent = course.subject;
        document.getElementById('paymentDuration').textContent = `${course.hours} ساعة`;
        document.getElementById('paymentPublisher').textContent = course.publisher;
        
        const price = course.price;
        const tax = price * 0.15;
        const total = price + tax;
        
        document.getElementById('paymentPrice').textContent = `${price.toFixed(2)} $`;
        document.getElementById('paymentTax').textContent = `${tax.toFixed(2)} $`;
        document.getElementById('paymentTotal').textContent = `${total.toFixed(2)} $`;
        document.getElementById('paymentAmount').textContent = `${total.toFixed(2)} $`;
        
        document.getElementById('paymentModal').classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    // تحديث دالة عرض نافذة المعلومات
    function showCourseInfo(courseId) {
        const course = courses.find(c => c.id === courseId);
        if (!course) return;
        
        // تحديث البيانات
        document.getElementById('infoCourseImage').src = course.image;
        document.getElementById('infoCourseName').textContent = course.title;
        document.getElementById('infoSubjectTag').textContent = course.subject;
        document.getElementById('infoGradeTag').textContent = course.grade;
        document.getElementById('infoPublisher').textContent = course.publisher;
        document.getElementById('infoDate').textContent = course.date;
        document.getElementById('infoGrade').textContent = course.grade;
        document.getElementById('infoSubject').textContent = course.subject;
        document.getElementById('infoHours').textContent = course.hours;
        document.getElementById('infoLessons').textContent = course.lessons;
        document.getElementById('infoDescription').textContent = course.description;
        document.getElementById('infoNotes').textContent = course.notes;
        
        // تحديث السعر
        const priceDisplay = course.free ? 'مجاني' : `${course.price.toFixed(2)} $`;
        document.getElementById('infoPriceMain').textContent = priceDisplay;
        
        // إخفاء الخصم إذا كان مجانياً
        if (course.free) {
            document.getElementById('infoDiscount').style.display = 'none';
        }
        
        document.getElementById('infoModal').classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    // تحديث دالة إغلاق النوافذ
    function closePaymentModal() {
        document.getElementById('paymentModal').classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    function closeInfoModal() {
        document.getElementById('infoModal').classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    // دالة إظهار/إخفاء CVV
    function toggleCVV(button) {
        const input = button.parentElement.querySelector('input');
        const icon = button.querySelector('i');
        
        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }

    // إغلاق النوافذ عند النقر خارجها
    document.querySelectorAll('.payment-modal, .info-modal').forEach(modal => {
        modal.addEventListener('click', function(e) {
            if (e.target === this) {
                if (this.id === 'paymentModal') closePaymentModal();
                if (this.id === 'infoModal') closeInfoModal();
            }
        });
    });

    // إغلاق بالزر ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closePaymentModal();
            closeInfoModal();
        }
    });

        // بيانات الكورسات مع حالة الشراء
        const courses = [
            {
                id: 1,
                title: "الرياضيات المتقدمة - الصف الأول إعدادي",
                description: "شرح مفصل لجميع فصول الرياضيات مع تمارين وتطبيقات عملية تشمل جميع مواضيع المنهج الأساسية.",
                subject: "الرياضيات",
                grade: "الأول إعدادي",
                hours: 24,
                lessons: 12,
                price: 29.99,
                publisher: "د. أحمد السيد",
                date: "15 مارس 2024",
                image: "https://images.unsplash.com/photo-1635070041078-e363dbe005cb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
                duration: "04:30",
                notes: "يشمل شهادة إكمال - يمكنك الوصول للكورس لمدة سنة كاملة - متابعة مباشرة من الأستاذ",
                free: false,
                purchased: true // تم شراؤه
            },
            {
                id: 2,
                title: "اللغة العربية - النحو والصرف",
                description: "دورة متكاملة في النحو والصرف للمرحلة الإعدادية تشمل جميع القواعد الأساسية.",
                subject: "اللغة العربية",
                grade: "الثاني متوسط",
                hours: 18,
                lessons: 9,
                price: 19.99,
                publisher: "أ. فاطمة حسن",
                date: "20 فبراير 2024",
                image: "https://images.unsplash.com/photo-1580584126903-c17d41830450?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
                duration: "03:15",
                notes: "يشمل تمارين تفاعلية وتصحيح آلي - شهادة معتمدة",
                free: false,
                purchased: false // لم يتم شراؤه
            },
            {
                id: 3,
                title: "الكيمياء العملية",
                description: "تجارب كيميائية عملية مع شرح النظريات العلمية وتطبيقاتها في الحياة اليومية.",
                subject: "الكيمياء",
                grade: "الثالث إعدادي",
                hours: 20,
                lessons: 10,
                price: 0,
                publisher: "د. خالد مصطفى",
                date: "10 يناير 2024",
                image: "https://images.unsplash.com/photo-1532094349884-543bc11b234d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
                duration: "05:45",
                notes: "كورس مجاني بالكامل - متوفر للجميع - شهادة مجانية",
                free: true,
                purchased: true // مجاني ومتاح
            },
            {
                id: 4,
                title: "الفيزياء الحديثة",
                description: "أساسيات الفيزياء وتطبيقاتها في الحياة اليومية مع تجارب تفاعلية.",
                subject: "الفيزياء",
                grade: "الأول ثانوي",
                hours: 30,
                lessons: 15,
                price: 39.99,
                publisher: "د. سامي رجب",
                date: "1 مارس 2024",
                image: "https://images.unsplash.com/photo-1636466497217-26a8cbeaf0aa?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
                duration: "06:20",
                notes: "يشمل محاكيات تفاعلية ثلاثية الأبعاد - شهادة معتمدة",
                free: false,
                purchased: false
            },
            {
                id: 5,
                title: "الإنجليزية للمبتدئين",
                description: "تعلم الإنجليزية من الصفر مع نطق صحيح ومحادثات عملية وحياتية.",
                subject: "اللغة الإنجليزية",
                grade: "جميع الصفوف",
                hours: 40,
                lessons: 20,
                price: 49.99,
                publisher: "أ. سارة محمد",
                date: "5 فبراير 2024",
                image: "https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
                duration: "08:10",
                notes: "يشمل اختبارات مستوى وتصحيح للنطق - شهادة معتمدة عالمياً",
                free: false,
                purchased: true
            },
            {
                id: 6,
                title: "البيولوجيا الحيوية",
                description: "استكشاف عالم الأحياء والكائنات الحية مع صور ومقاطع توضيحية.",
                subject: "العلوم",
                grade: "الثاني إعدادي",
                hours: 22,
                lessons: 11,
                price: 24.99,
                publisher: "د. ليلى أحمد",
                date: "10 مارس 2024",
                image: "https://images.unsplash.com/photo-1530026405186-1d5d58d71e0d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
                duration: "04:50",
                notes: "يشمل صور ومقاطع فيديو توضيحية - شهادة إكمال",
                free: false,
                purchased: false
            },
            {
                id: 7,
                title: "الرياضيات الأساسية",
                description: "مراجعة شاملة لأسس الرياضيات للمرحلة الابتدائية مع تمارين عملية.",
                subject: "الرياضيات",
                grade: "السادس ابتدائي",
                hours: 15,
                lessons: 8,
                price: 0,
                publisher: "أ. عماد حسين",
                date: "25 يناير 2024",
                image: "https://images.unsplash.com/photo-1509228468518-180dd4864904?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
                duration: "03:00",
                notes: "مناسب للمراجعة قبل الاختبارات - شهادة مجانية",
                free: true,
                purchased: true
            },
            {
                id: 8,
                title: "التاريخ الإسلامي",
                description: "رحلة عبر التاريخ الإسلامي وأبرز الأحداث والشخصيات المؤثرة.",
                subject: "التاريخ",
                grade: "الثالث متوسط",
                hours: 25,
                lessons: 13,
                price: 29.99,
                publisher: "د. علي محمد",
                date: "28 فبراير 2024",
                image: "https://images.unsplash.com/photo-1585208798174-7afe72dc0fbb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
                duration: "05:15",
                notes: "يشمل خرائط تفاعلية وجداول زمنية - شهادة معتمدة",
                free: false,
                purchased: false
            },
            {
                id: 9,
                title: "الجغرافيا العامة",
                description: "دراسة شاملة للجغرافيا الطبيعية والبشرية مع خرائط تفاعلية.",
                subject: "الجغرافيا",
                grade: "الثاني ثانوي",
                hours: 28,
                lessons: 14,
                price: 34.99,
                publisher: "د. حسين عبدالله",
                date: "5 مارس 2024",
                image: "https://images.unsplash.com/photo-1528164344705-47542687000d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
                duration: "06:45",
                notes: "خرائط تفاعلية ثلاثية الأبعاد - شهادة معتمدة",
                free: false,
                purchased: false
            }
        ];

        // عرض الكورسات
        function renderCourses(filteredCourses = courses) {
            const container = document.getElementById('coursesGrid');
            const countElement = document.getElementById('resultsCount');
            
            container.innerHTML = '';
            countElement.textContent = filteredCourses.length;
            
            filteredCourses.forEach(course => {
                const courseElement = document.createElement('div');
                courseElement.className = 'course-card';
                courseElement.dataset.id = course.id;
                courseElement.dataset.subject = course.subject.toLowerCase();
                courseElement.dataset.free = course.free;
                courseElement.dataset.purchased = course.purchased;
                
                // تحديد حالة الزر (play أو lock)
                const showPlayButton = course.purchased || course.free;
                const buttonClass = showPlayButton ? 'play' : 'lock';
                const buttonIcon = showPlayButton ? 'fa-play' : 'fa-lock';
                const buttonTitle = showPlayButton ? 'بدء التعلم' : 'شراء الكورس';
                
                courseElement.innerHTML = `
                    <div class="course-image">
                        <img src="${course.image}" alt="${course.title}">
                        <div class="image-overlay">
                            <div class="status-badge ${buttonClass}" 
                                 onclick="${showPlayButton ? `startCourse(${course.id})` : `showPaymentModal(${course.id})`}"
                                 title="${buttonTitle}">
                                <i class="fas ${buttonIcon}"></i>
                            </div>
                            <div class="info-badge" onclick="showCourseInfo(${course.id})" title="عرض التفاصيل">
                                <i class="fas fa-info"></i>
                            </div>
                        </div>
                        
                        ${course.purchased ? 
                            '<div class="purchased-badge">✓ تم الشراء</div>' : 
                            ''
                        }
                        
                        <div class="duration-badge">${course.duration}</div>
                    </div>
                    
                    <div class="course-content">
                        <h3 class="course-title">${course.title}</h3>
                        
                        <div class="course-meta">
                            <div class="meta-item">
                                <span class="meta-label">التاريخ</span>
                                <span class="meta-value">${course.date}</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">الصف</span>
                                <span class="meta-value">${course.grade}</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">المدة</span>
                                <span class="meta-value">${course.hours} ساعة</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">الناشر</span>
                                <span class="meta-value">${course.publisher}</span>
                            </div>
                        </div>
                        
                        <div class="course-footer">
                            <div class="course-price ${course.free ? 'free' : ''}">
                                ${course.free ? 'مجاني' : `${course.price} $`}
                            </div>
                            <div class="course-actions">
                                <button class="info-badge-small" onclick="showCourseInfo(${course.id})" title="عرض التفاصيل">
                                    <i class="fas fa-info"></i>
                                </button>
                                ${showPlayButton ? 
                                    `<button class="play-btn-small" onclick="startCourse(${course.id})" title="بدء التعلم">
                                        <i class="fas fa-play"></i>
                                    </button>` :
                                    `<button class="lock-btn-small" onclick="showPaymentModal(${course.id})" title="شراء الكورس">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>`
                                }
                            </div>
                        </div>
                    </div>
                `;
                
                container.appendChild(courseElement);
            });
        }

        // البحث عن الكورسات
        document.getElementById('searchCourses').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const filtered = courses.filter(course => 
                course.title.toLowerCase().includes(searchTerm) ||
                course.description.toLowerCase().includes(searchTerm) ||
                course.subject.toLowerCase().includes(searchTerm) ||
                course.publisher.toLowerCase().includes(searchTerm) ||
                course.grade.toLowerCase().includes(searchTerm)
            );
            renderCourses(filtered);
        });

        // التصفية
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                const filter = this.dataset.filter;
                let filteredCourses = courses;
                
                if (filter === 'free') {
                    filteredCourses = courses.filter(c => c.free);
                } else if (filter === 'purchased') {
                    filteredCourses = courses.filter(c => c.purchased);
                } else if (filter !== 'all') {
                    filteredCourses = courses.filter(c => 
                        c.subject.toLowerCase().includes(filter)
                    );
                }
                
                renderCourses(filteredCourses);
            });
        });

        // عرض نافذة الدفع
        function showPaymentModal(courseId) {
            const course = courses.find(c => c.id === courseId);
            if (!course) return;
            
            document.getElementById('paymentCourseName').textContent = course.title;
            document.getElementById('paymentSubject').textContent = course.subject;
            document.getElementById('paymentDuration').textContent = `${course.hours} ساعة`;
            document.getElementById('paymentPublisher').textContent = course.publisher;
            document.getElementById('paymentPrice').textContent = `${course.price} $`;
            document.getElementById('paymentTotal').textContent = `${course.price} $`;
            
            document.getElementById('paymentModal').classList.add('active');
        }

        // إغلاق نافذة الدفع
        function closePaymentModal() {
            document.getElementById('paymentModal').classList.remove('active');
        }

         // تأكد من أن دالة showCourseInfo صحيحة
    function showCourseInfo(courseId) {
        const course = courses.find(c => c.id === courseId);
        if (!course) return;
        
        console.log('عرض معلومات الكورس:', course.title); // للتشخيص
        
        // تحديث البيانات
        document.getElementById('infoCourseImage').src = course.image;
        document.getElementById('infoCourseName').textContent = course.title;
        document.getElementById('infoSubjectTag').textContent = course.subject;
        document.getElementById('infoGradeTag').textContent = course.grade;
        document.getElementById('infoPublisher').textContent = course.publisher;
        document.getElementById('infoDate').textContent = course.date;
        document.getElementById('infoGrade').textContent = course.grade;
        document.getElementById('infoSubject').textContent = course.subject;
        document.getElementById('infoHours').textContent = course.hours;
        document.getElementById('infoLessons').textContent = course.lessons;
        document.getElementById('infoDescription').textContent = course.description;
        document.getElementById('infoNotes').textContent = course.notes;
        
        // تحديث السعر
        const priceDisplay = course.free ? 'مجاني' : `${course.price.toFixed(2)} $`;
        document.getElementById('infoPriceMain').textContent = priceDisplay;
        
        // إخفاء الخصم إذا كان مجانياً
        if (course.free) {
            document.getElementById('infoDiscount').style.display = 'none';
        } else {
            document.getElementById('infoDiscount').style.display = 'block';
        }
        
        // إظهار النافذة
        const modal = document.getElementById('infoModal');
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
        
        console.log('تم إظهار النافذة'); // للتشخيص
    }

    // دالة إغلاق نافذة المعلومات
    function closeInfoModal() {
        const modal = document.getElementById('infoModal');
        modal.classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    // إضافة مستمع للنقر خارج النافذة
    document.addEventListener('DOMContentLoaded', function() {
        const infoModal = document.getElementById('infoModal');
        
        infoModal.addEventListener('click', function(e) {
            if (e.target === this) {
                closeInfoModal();
            }
        });
        
        // إغلاق بالزر ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeInfoModal();
            }
        });
    });

    // تأكد من أن زر "حول" في كروت الكورسات يعمل
    document.addEventListener('click', function(e) {
        if (e.target.closest('.info-badge') || 
            e.target.closest('.info-badge-small') || 
            e.target.closest('[onclick*="showCourseInfo"]')) {
            // منع السلوك الافتراضي إذا كان هناك
            e.preventDefault();
        }
    });
        // تنسيق رقم البطاقة
        function formatCardNumber(input) {
            let value = input.value.replace(/\D/g, '');
            value = value.replace(/(\d{4})(?=\d)/g, '$1 ');
            input.value = value;
        }

        // تنسيق تاريخ الانتهاء
        function formatExpiryDate(input) {
            let value = input.value.replace(/\D/g, '');
            if (value.length >= 2) {
                value = value.substring(0, 2) + '/' + value.substring(2, 4);
            }
            input.value = value;
        }

        // بدء الكورس (للأشياء المشتراة أو المجانية)
        function startCourse(courseId) {
            const course = courses.find(c => c.id === courseId);
            alert(`يتم تحميل الكورس: "${course.title}"\nسيتم نقلك إلى صفحة المحاضرات...`);
            // هنا يمكنك إعادة التوجيه إلى صفحة المحاضرات
        }

        // معالجة نموذج الدفع
        document.getElementById('paymentForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (confirm('هل تريد تأكيد عملية الدفع؟')) {
                alert('تمت عملية الدفع بنجاح! سيتم تفعيل الكورس خلال دقائق.');
                closePaymentModal();
                
                // هنا يمكنك تحديث حالة الكورس إلى تم الشراء
                // courses.find(c => c.id === courseId).purchased = true;
                // renderCourses();
            }
        });

        // إغلاق النوافذ بالزر ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closePaymentModal();
                closeInfoModal();
            }
        });

        // إغلاق النوافذ عند النقر خارجها
        document.querySelectorAll('.payment-modal, .info-modal').forEach(modal => {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    if (this.id === 'paymentModal') closePaymentModal();
                    if (this.id === 'infoModal') closeInfoModal();
                }
            });
        });

        // أسلوب إضافي للأزرار الصغيرة
        const style = document.createElement('style');
        style.textContent = `
            .info-badge-small, .play-btn-small, .lock-btn-small {
                width: 35px;
                height: 35px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                border: none;
                cursor: pointer;
                transition: all 0.3s;
                font-size: 14px;
                color: white;
            }
            
            .info-badge-small {
                background: #3b82f6;
            }
            
            .info-badge-small:hover {
                background: #2563eb;
                transform: scale(1.1);
            }
            
            .play-btn-small {
                background: #10b981;
            }
            
            .play-btn-small:hover {
                background: #059669;
                transform: scale(1.1);
            }
            
            .lock-btn-small {
                background: #ef4444;
            }
            
            .lock-btn-small:hover {
                background: #dc2626;
                transform: scale(1.1);
            }
            
            body.dark-theme .course-meta {
                background: rgba(255,255,255,0.05);
                padding: 10px;
                border-radius: 10px;
            }
        `;
        document.head.appendChild(style);

        // عرض الكورسات عند تحميل الصفحة
        document.addEventListener('DOMContentLoaded', function() {
            renderCourses();
        });