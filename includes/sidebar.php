<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme">
    <div class="app-brand demo">
        <a href="<?php if (isset($_SESSION['labid'])) : echo ('../index.php ');
                    elseif (isset($_SESSION['aid'])) : echo ('../index.php');
                    else : echo ('index.php');
                    endif; ?>" class="app-brand-link">
            <?php
            if (isset($_SESSION['labid'])) : echo ('<img src="../img\mainlogo2.png">');
            elseif (isset($_SESSION['aid'])) : echo ('<img src="../img\mainlogo2.png">');
            else : echo ('<img src="img\mainlogo2.png">');
            endif;
            ?>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <!-- For Lab Manager -->
    <?php if (isset($_SESSION['labid'])) : ?>
        <ul class="menu-inner py-1 ps ps--active-y">
            <!-- Dashboard -->
            <li class="menu-item active">
                <a href="labdashboard.php" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                </a>
            </li>
            <!-- Phlebotomist -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Phlebotomist</span></li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                    <div data-i18n="Misc">Phlebotomist</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="add-phlebotomist.php" class="menu-link">
                            <div data-i18n="Error">Add</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="manage-phlebotomist.php" class="menu-link">
                            <div data-i18n="Manage">Manage</div>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Testing -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Testing</span></li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                    <div data-i18n="Misc">Testing</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="new-test.php" class="menu-link">
                            <div data-i18n="Error">New</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="assigned-test.php" class="menu-link">
                            <div data-i18n="Under Maintenance">Assigned</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ontheway-samplecollection-test.php" class="menu-link">
                            <div data-i18n="Under Maintenance">On the Way for<br /> Sample Collection</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="sample-collected-test.php" class="menu-link">
                            <div data-i18n="Under Maintenance">Sample Collected</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="samplesent-lab-test.php" class="menu-link">
                            <div data-i18n="Under Maintenance">Sent to lab</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="reportdelivered-test.php" class="menu-link">
                            <div data-i18n="Under Maintenance">Report Delivered</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="all-test.php" class="menu-link">
                            <div data-i18n="Under Maintenance">All Tests</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Report -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Report</span></li>
            <li class="menu-item">
                <a href="bwdates-report-ds.php" class="menu-link">
                    <i class=' menu-icon tf-icons bx bx-test-tube'></i>
                    <div data-i18n="Basic">B/w Dates Report</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="search-report.php" class="menu-link">
                    <i class='menu-icon tf-icons bx bx-test-tube'></i>
                    <div data-i18n="Basic">Search Report</div>
                </a>
            </li>

            <!-- For Admin -->
        </ul>
    <?php elseif (isset($_SESSION['aid'])) : ?>
        <!-- Dashboard -->
        <!-- Manage Labs -->
        <!-- Report -->

    <?php else : ?>
        <ul class="menu-inner py-1 ps ps--active-y">
            <!-- Dashboard -->
            <!-- <li class="menu-item active">
                <a href="../dashboard.php" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                </a>
            </li> -->
            <!-- Test -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Test</span></li>
            <li class="menu-item">
                <a href="new-user-testing.php" class="menu-link">
                    <i class=' menu-icon tf-icons bx bx-test-tube'></i>
                    <div data-i18n="Basic">New Test</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="registered-user-testing.php" class="menu-link">
                    <i class='menu-icon tf-icons bx bx-test-tube'></i>
                    <div data-i18n="Basic">Already Registered User</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="patient-search-report.php" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-collection"></i>
                    <div data-i18n="Basic">Test Report</div>
                </a>
            </li>
            <!-- /Test -->
            <!-- Cases -->
            <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Cases</span></li>
            <li class="menu-item">
                <a href="covidcases.php" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-collection"></i>
                    <div data-i18n="Basic">Live Covid Cases</div>
                </a>
            </li> -->
        </ul>
    <?php endif; ?>
</aside>