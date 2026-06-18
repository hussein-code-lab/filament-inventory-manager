# Filament Inventory Manager 🚀

نظام ذكي ومبسط لإدارة المخازن والمنتجات، تم بناؤه لتوفير تجربة مستخدم سلسة وأداء عالي في إدارة الكميات والمخزون عبر مستودعات متعددة. المشروع مصمم كـ Portfolio يبرز مهارات هندسة الخلفية (Backend Architecture) وكتابة الكود النظيف.

## 🛠️ تقنيات المشروع (Tech Stack)

* **Framework:** Laravel 12 ⚡
* **Admin Panel:** Filament PHP v5 (تعتمد على Livewire v4) 🎨
* **Database:** MySQL 🗄️
* **Environment:** Ubuntu Linux 🐧

---

## ✨ المميزات الرئيسية (Key Features)

1. **إدارة المنتجات والمتاجر (Full CRUD):** فصل كامل ومنطقي لبيانات المنتجات الأساسية عن المستودعات والمتاجر.
2. **إدخال ذكي للمخزون (Dynamic Pivot Management):** إمكانية جرد وتعيين المنتجات لكل متجر وتحديد كمياتها بدقة من داخل صفحة المتجر نفسه عبر الـ `Repeater` المخصص لموديل الـ Pivot.
3. **منع الأخطاء البشرية (UX Validation):** حظر تكرار اختيار نفس المنتج داخل المتجر الواحد تلقائياً في واجهة المستخدم عبر خاصية `disableOptionsWhenSelectedInSiblingRepeaterItems()`.
4. **أداء عالي واستعلامات ذكية (Optimized Queries):** حساب وعرض إجمالي المخزون لكل منتج في جدول العرض الرئيسي من خلال دمج الاستعلامات وسرعة الـ `Database Subqueries` لمنع مشكلة الـ `N+1 Query`.

---

## 📸 لقطات من لوحة التحكم (Screenshots)

### شاشة عرض المنتجات وإجمالي المخزون
هنا يتم عرض المنتجات والمتاجر المتواجدة بها مع حساب إجمالي المخزون الفعلي من قاعدة البيانات مباشرة:

![Products List](screenshots/products-list.png)

### شاشة إدارة جرد المتجر (الـ Repeater والكميات)
*(إذا التقطت صورة للفورم، يمكنك إزالة التعليق وتفعيل السطر بالأسفل)*
---

## 🗄️ هيكل قاعدة البيانات (Database Schema)

المشروع يعتمد على بنية جداول مرنة:
* `products`: تخزين بيانات المنتج والـ SKU الفريد والسعر.
* `stores`: تخزين بيانات المستودعات والمتاجر ومواقعها.
* `product_store` (Pivot Table): يربط المنتجات بالمتاجر ويحتوي على حقل الـ `quantity` والـ Timestamps، ويدار برمجياً عبر موديل وسيط مخصص يورث من كلاس `Pivot`.

---

## 🚀 التشغيل المحلي (Installation)

1. قم بعمل Clone للمشروع:
```bash
git clone git@github.com:hussein-code-lab/filament-inventory-manager.git
cd filament-inventory-manager
