<?php
/**
 * Template Name: Case Study - Redis
 * Description: Custom template for the Case Study - Redis page.
 */
get_header();

// --- Retrieve ACF Field Values ---

// Banner Section
$banner_video_mp4_url   = get_field( 'case_study_banner_video_mp4' );
$banner_x_image         = get_field( 'case_study_banner_x_image' ); // Image Array

// Section 1: Why is Redis Enterprise needed by the Financial Industry
$redis_section_1_heading = get_field( 'redis_section_1_heading' );
$redis_section_1_content = get_field( 'redis_section_1_content' ); // WYSIWYG

// Section 2: Financial Modeling And Risk Assessment
$redis_section_2_heading = get_field( 'redis_section_2_heading' );
$redis_section_2_content = get_field( 'redis_section_2_content' ); // WYSIWYG

// Section 3: The Real Currency: Customer Engagement
$redis_section_3_heading = get_field( 'redis_section_3_heading' );
$redis_section_3_content = get_field( 'redis_section_3_content' ); // WYSIWYG

// Section 4: Reducing Latency For Institutional Investors With Redis Enterprise
$redis_section_4_heading = get_field( 'redis_section_4_heading' );
$redis_section_4_content = get_field( 'redis_section_4_content' ); // WYSIWYG

// --- Prepare Image/Video URLs and Alt Texts ---
// For the X image in the banner
$banner_x_image_url = $banner_x_image['url'] ?? '';
$banner_x_image_alt = $banner_x_image['alt'] ?? 'Decorative X image';
?>

<div class="smooth-scroll" data-scroll-container>
    <div class="space"></div>
    <section class="in-banner">
        <div class="img-box">
            <?php if ( $banner_video_mp4_url ) : ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo esc_url( $banner_video_mp4_url ); ?>" type="video/mp4">
                </video>
            <?php else : ?>
                <!-- Fallback video if ACF field is empty -->
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/video/banner.mp4" type="video/mp4">
                </video>
            <?php endif; ?>
        </div>
        <div class="x" data-scroll data-scroll-speed="3" data-scroll-direction="horizontal">
            <?php if ( $banner_x_image_url ) : ?>
                <img src="<?php echo esc_url( $banner_x_image_url ); ?>" alt="<?php echo esc_attr( $banner_x_image_alt ); ?>">
            <?php else : ?>
                <!-- Fallback X image if ACF field is empty -->
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/in-banner/x.webp" alt="X">
            <?php endif; ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="page-title"><?php the_title(); ?></h2>
                </div>
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Study</li> <?php ?>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER END -->

    <section class="analytics">
        <div class="container">
            <div class="row">
                <div class="col-12 pb-2 pb-md-3 pb-xl-4"></div>
                <div class="col-12">
                    <div class="section-title mb-sm-3 mb-lg-4 mb-xl-5">
                        <?php if ( $redis_section_1_heading ) : ?>
                            <h4><?php echo esc_html( $redis_section_1_heading ); ?></h4>
                        <?php else : ?>
                            <h4>Why is Redis Enterprise needed by the Financial Industry</h4> <!-- Default heading -->
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <?php if ( $redis_section_1_content ) : ?>
                        <?php echo wp_kses_post( apply_filters( 'the_content', $redis_section_1_content ) ); ?>
                    <?php else : ?>
                        <!-- Default content -->
                        <p>Consumer expectations have increased, regulators have ramped up their scrutiny of financial institutions, hence, the financial industry faces massive challenges.</p>
                        <p>When it comes to meeting their financial needs, consumers have many choices where they expect real-time performance and fast decisions from their financial institutions. Investment opportunities vanish as quickly as they appear and that puts immense downward pressure on fees while increased volatility and competition is pressuring returns.</p>
                        <p>Amidst the global pandemic and associated economic turmoil, central banks are holding interest rates near zero and even discussing negative interest rates, which has affected net interest income and inflated asset prices. Financial institutions are responding by looking to improve profitability by making business decisions faster</p>
                        <p>Built on the popular open-source Redis database, it is quite evidently the perfect tool to address these issues and help make banks competitive. In the need for real-time data, algorithmic and retail trading volumes have exploded, and the consumers now expect real-time data on their banking and brokerage applications. Taking advantage of these opportunities, financial institutions require a high-performance database that delivers sub-millisecond response times for reads and writes, stores data from dozens of data sources in multiple data models, and provides high availability and multi-layered security.</p>
                        <p>Illustrating the power and potential that Redis Enterprise can bring to your financial institution, the three areas of the financial industry: risk modeling, apps for banking and brokerage, and solutions for buy-side institutions.</p>
                    <?php endif; ?>

                    <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                            the_content();
                        endwhile;
                    else :
                        echo '<p>No additional content found for this case study.</p>';
                    endif;
                    ?>
                </div>

                <div class="col-12 mt-4 mt-md-5">
                    <div class="section-title mb-sm-3 mb-lg-4 mb-xl-5">
                        <?php if ( $redis_section_2_heading ) : ?>
                            <h4><?php echo esc_html( $redis_section_2_heading ); ?></h4>
                        <?php else : ?>
                            <h4>Financial Modeling And Risk Assessment</h4> <!-- Default heading -->
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <?php if ( $redis_section_2_content ) : ?>
                        <?php echo wp_kses_post( apply_filters( 'the_content', $redis_section_2_content ) ); ?>
                    <?php else : ?>
                        <!-- Default content -->
                        <p>Streamlined regulations, increased complexity, and large volume of transactions undertaken by many institutions show how risk and financial modeling have always been an integral part of the industry.</p>
                        <p>Built on traditional relational databases, the systems can fall short when it comes to the streaming of market data and providing query answers in real time. Dealing with data in multiple formats such as time series for asset pricing and executed trades, JSON for details on each asset or trade, modern models must account for thousands (if not millions) of data points and transactions each day. Storing and executing multiple risk models at the same time is difficult to architect in a relational database.</p>
                        <p>The lawmakers have introduced regulations requiring banks to model their financial losses on loans and credit cards for various economic outcomes, since the subprime mortgage crisis of 2010. Conducted by the Federal Reserve, the stress tests of the U.S. banking system are an example of this type of risk assessment and modeling. This type of modeling can force banks to increase their loan-loss reserves, capital available to make new loans and thus earn a profit, or constrain the bank’s ability to pay dividends or do share buybacks.</p>
                        <p>The Financial Accounting Standards Board (FASB) introduced the Current Expected Credit Loss (CECL) as the new standard to recognize expected losses. For a multitude of economic outcomes, companies are now able to model and forecast losses.</p>
                        <p>PwC noted that the COVID-19 pandemic is putting this standard to the test in real time, and that the FASB intends to have companies recognize losses on a timely basis. New accounting standards usually impact just the accounting department and the software it uses, but CECL requires a robust credit-risk modeling, financial reporting, and governance model. Implementation of these standards and regulations must be underpinned by a robust, fast, and flexible data infrastructure.</p>
                        <p>You can be proactive in addressing your regulatory and compliance needs with Redis Enterprise, and you can easily scale to store years of data on risk models in memory and score it in real time while offering high-availability deployment models that ensure you are protected against data loss. Results can be assessed in seconds or minutes whereas a traditional relational database could take hours to return results, and it can be described as a multi-model database.</p>
                        <p>You do not need a separate database management system for each model. For various economic scenarios, time-series data on past or expected losses can be stored in RedisTimeSeries, you can also use RedisGraph to find relationships between various transactions to address questions about potentially fraudulent transactions, while RedisBloom can help detect unusual account activity.</p>
                    <?php endif; ?>
                </div>

                <div class="col-12 mt-4 mt-md-5">
                    <div class="section-title mb-sm-3 mb-lg-4 mb-xl-5">
                        <?php if ( $redis_section_3_heading ) : ?>
                            <h4><?php echo esc_html( $redis_section_3_heading ); ?></h4>
                        <?php else : ?>
                            <h4>The Real Currency: Customer Engagement</h4> <!-- Default heading -->
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <?php if ( $redis_section_3_content ) : ?>
                        <?php echo wp_kses_post( apply_filters( 'the_content', $redis_section_3_content ) ); ?>
                    <?php else : ?>
                        <!-- Default content -->
                        <p>Tim Stuart, CFO of Microsoft’s Xbox division, said: “I like to talk about how engagement equals currency…”. This summarizes today’s customers' prize engagement over everything else.</p>
                        <p>Consumer expectations from their financial institutions, and their default mode of interaction is now via a mobile device. Consumers demand their apps be engaging to use and responsive to the touch, and younger consumers rarely visit a physical banking location. Consumers demand real-time data about their financial status—at any time and in any location, while Mobile banking and brokerage apps now rank among the most-used apps by consumers.</p>
                        <p>To be responsive is a tougher data challenge, and a sleek user interface is the minimum bar for a client-facing financial application. Not designed for millions of customers constantly accessing their accounts and transacting millions of times, many banks have built their banking applications on top of relational databases built for an era of few transactions and minimal customer queries.</p>
                        <p>Having upgraded to more expensive, specialized database hardware appliances to buy time, banks have improved the scalability of their relational databases by adding a cache. These architecture and hardware changes improve scalability, but often at the expense of increased cost, complexity, and management.</p>
                        <p>Using Redis as your primary database and thus reducing complexity while meeting your customers’ ever-increasing demands, rethink your mobile application to be responsive, scalable, and highly available using Redis Enterprise. RediSearch is a powerful text search and secondary indexing engine that provides real-time data.</p>
                    <?php endif; ?>
                </div>

                <div class="col-12 mt-4 mt-md-5">
                    <div class="section-title mb-sm-3 mb-lg-4 mb-xl-5">
                        <?php if ( $redis_section_4_heading ) : ?>
                            <h4><?php echo esc_html( $redis_section_4_heading ); ?></h4>
                        <?php else : ?>
                            <h4>Reducing Latency For Institutional Investors With Redis Enterprise</h4> <!-- Default heading -->
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <?php if ( $redis_section_4_content ) : ?>
                        <?php echo wp_kses_post( apply_filters( 'the_content', $redis_section_4_content ) ); ?>
                    <?php else : ?>
                        <!-- Default content -->
                        <p>increased costs for asset managers as clients in search of superior returns eagerly switch from one firm to another as they must offer more incentives to attract investors.</p>
                        <p>Analyzing thousands of investment opportunities each day to find the best investment ideas, the number of data sources that portfolio management software must deal with has exploded. Managers want to see a real-time Investment Book of Record (IBOR) on their positions to make timely decisions during trading hours, while Real-time risk analysis of a portfolio can be a challenging exercise. Asset managers also have a need for net asset value (NAV) calculations during the trading hours. Technically challenging without a data infrastructure, generating an accurate IBOR or NAV during the trading day can be that offers millisecond-level latency. Milliseconds can make or break a trade, and Redis Enterprise can ingest and process millions of data points per second with sub-millisecond latency. At the speed of Redis, calculating accurate position data in IBOR becomes a breeze. It offers multiple modules such as RedisSearch, Redis TimeSeries, RedisAI, RedisJSON, and others that make life easy for technology teams. Making critical information available in real time to asset managers, asset management firms can reduce the complexity of their technology stack, and reduce cost.</p>
                        <p>Financial solutions can leverage Redis Enterprise to help reduce costs and friction when dealing with complex financial data from multiple sources and improve overall customer responsiveness while reducing the risks facing your enterprise.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>