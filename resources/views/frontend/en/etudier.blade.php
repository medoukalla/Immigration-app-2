<x-en.head title="{{ setting('site.title') . ' - ' . 'Study in Spain' }}" />

<x-en.main-navbar route="{{ route('frontend.sp.index') }}" />

<!-- Hero Section -->
<div class="pages-banner blog">
    <div class="base-container w-container">
        <div class="min-hero-wrapper" style="min-height: 225px;">
            <h1>Study in Spain</h1>
            <p>
                Discover the academic opportunities available in Spain. We guide you through the process of choosing the
                right program and obtaining your student visa.
            </p>
            <div class="pages-path">
                <div class="p-path">
                    <a href="{{ route('frontend.sp.index') }}">Welcome</a>
                </div>
                <img src="{{ asset('assets/images/svg/arrow.svg') }}" alt="Path Arrow">
                <div class="p-path">
                    Services
                </div>
                <img src="{{ asset('assets/images/svg/arrow.svg') }}" alt="Path Arrow">
                <div class="p-path">
                    Study in Spain
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Content Section -->
<div class="section">
    <div class="base-container w-container">
        <div class="w-layout-grid doc-wrapper" style="grid-template-columns: 2fr 1fr; gap: 40px;">
            <!-- Left Column: Main Content -->
            <div class="content-left">
                <div class="image-box" style="margin-bottom: 30px;">
                    <img src="{{ asset('img/img05.png') }}" alt="Study in Spain"
                        style="width: 100%; border-radius: 12px;">
                </div>

                <h2 style="margin-bottom: 20px;">What can I study in Spain?</h2>

                <div class="text-content" style="margin-bottom: 30px;">
                    <p>In Spain, international students have access to a varied academic offer, which includes not only
                        university bachelor's and master's degree programs, but also vocational training programs
                        (higher degree) and university preparatory programs (selectividad). Additionally, studying in
                        Spain also offers the opportunity to learn the Spanish language, a highly sought-after skill in
                        the international labor market.</p>

                    <p>Students can choose to study Spanish at a specialized language school to acquire the necessary
                        language skills to communicate effectively with locals, as well as to improve their professional
                        prospects in Spain and other Spanish-speaking countries.</p>

                    <p>For those wishing to pursue university studies, Spain offers a variety of university bachelor's
                        and master's programs in areas such as law, economics, engineering, human sciences, information
                        technology, health, social sciences, and much more. Students can also pursue vocational training
                        (higher degree) to acquire specialized skills in a specific professional field, which can open
                        many doors for their future career.</p>

                    <p>Finally, students can follow a preparatory year (selectividad) to access the Spanish university.
                        This preparatory year allows them to prepare for the entrance exams to the Spanish university,
                        as well as perfect their command of the Spanish language.</p>

                    <p>In summary, studying in Spain offers students a variety of academic options, as well as the
                        opportunity to learn Spanish and immerse themselves in the Spanish culture.</p>
                </div>

                <!-- Links Grid -->
                <div class="w-layout-grid" style="grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 40px;">
                    <a href="{{ url('page/Estudiar-en-Espana-sin-Selectividad') }}" class="doc-block"
                        style="text-decoration: none; color: inherit; display: block; padding: 20px; background: #fff; border: 1px solid #e2e2e2; border-radius: 12px; transition: all 0.3s ease;">
                        <h4 style="margin: 0; font-size: 18px;">Study in Spain without Selectividad</h4>
                    </a>
                    <a href="{{ url('page/estudiar-selectividad-en-espana') }}" class="doc-block"
                        style="text-decoration: none; color: inherit; display: block; padding: 20px; background: #fff; border: 1px solid #e2e2e2; border-radius: 12px; transition: all 0.3s ease;">
                        <h4 style="margin: 0; font-size: 18px;">Study Selectividad in Spain</h4>
                    </a>
                    <a href="{{ url('page/estudiar-el-idioma-en-espana') }}" class="doc-block"
                        style="text-decoration: none; color: inherit; display: block; padding: 20px; background: #fff; border: 1px solid #e2e2e2; border-radius: 12px; transition: all 0.3s ease;">
                        <h4 style="margin: 0; font-size: 18px;">Study Language in Spain</h4>
                    </a>
                    <a href="{{ url('page/estudiar-la-licenciatura-en-espana') }}" class="doc-block"
                        style="text-decoration: none; color: inherit; display: block; padding: 20px; background: #fff; border: 1px solid #e2e2e2; border-radius: 12px; transition: all 0.3s ease;">
                        <h4 style="margin: 0; font-size: 18px;">Study Bachelor's in Spain</h4>
                    </a>
                    <a href="{{ url('page/estudiar-el-grado-superior-en-espana') }}" class="doc-block"
                        style="text-decoration: none; color: inherit; display: block; padding: 20px; background: #fff; border: 1px solid #e2e2e2; border-radius: 12px; transition: all 0.3s ease;">
                        <h4 style="margin: 0; font-size: 18px;">Vocational Training (Higher Degree)</h4>
                    </a>
                </div>

                <!-- CTA -->
                <div class="call-to-action-box"
                    style="padding: 30px; background: #f4f6f9; border-radius: 12px; text-align: center;">
                    <img src="{{ asset('img/img3.png') }}" alt="Student Visa"
                        style="max-width: 150px; margin-bottom: 20px;">
                    <h3 style="margin-bottom: 15px;">Interested in a student visa?</h3>
                    <p style="margin-bottom: 20px;">Book your free online consultation now.</p>
                    <a href="{{ route('frontend.sp.index') . '#consulting' }}" class="primary-button w-button">Book
                        Consultation</a>
                </div>
            </div>

            <!-- Right Column: Sidebar -->
            <div class="content-right">
                <div class="sticky-top"
                    style="top: 100px; padding: 30px; background: #fff; border: 1px solid #e2e2e2; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    <h3 style="margin-bottom: 20px; font-size: 24px;">Need Help?</h3>
                    <p style="margin-bottom: 15px;"><strong>Contact Us:</strong></p>
                    <p style="margin-bottom: 10px;"><strong>Online Chat:</strong> Average wait time 3 mins.</p>
                    <p style="margin-bottom: 10px;"><strong>Call Request:</strong> By appointment only.</p>
                    <p style="margin-bottom: 20px;"><strong>Social Media:</strong> Average wait time 15 mins.</p>

                    <div class="sidebar-links">
                        <!-- Add contact links here or generic button -->
                        <a href="{{ route('frontend.contact') }}" class="link-with-arrow-underline"
                            style="display: inline-block;">Contact Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<x-en.footer />