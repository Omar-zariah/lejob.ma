<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Postmeta;

class PostMetaTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    $postmetas = array(
      array('id' => '1','post_id' => '1','key' => 'excerpt','value' => 'Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'),
      array('id' => '2','post_id' => '2','key' => 'excerpt','value' => 'Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'),
      array('id' => '3','post_id' => '3','key' => 'excerpt','value' => 'Yes, If you are unhappy with our service, we offer 30 days money-back guarantee on any plan.'),
      array('id' => '4','post_id' => '4','key' => 'excerpt','value' => '{"facebook":"https:\\/\\/www.facebook.com\\/","twitter":"https:\\/\\/twitter.com\\/","linkedin":"https:\\/\\/linkedin.com\\/","instagram":"https:\\/\\/www.instagram.com\\/"}'),
      array('id' => '5','post_id' => '4','key' => 'description','value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
      array('id' => '6','post_id' => '4','key' => 'preview','value' => '/demo/1678125197LZ4zAxvVjarz0PrmZCqK.png'),
      array('id' => '7','post_id' => '5','key' => 'excerpt','value' => '{"facebook":"https:\\/\\/www.facebook.com\\/","twitter":"https:\\/\\/twitter.com\\/","linkedin":"https:\\/\\/linkedin.com\\/","instagram":"https:\\/\\/www.instagram.com\\/"}'),
      array('id' => '8','post_id' => '5','key' => 'description','value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
      array('id' => '9','post_id' => '5','key' => 'preview','value' => '/demo/1678125246G7FoUHHxe2C88n1cVXCq.png'),
      array('id' => '10','post_id' => '6','key' => 'excerpt','value' => '{"facebook":"https:\\/\\/www.facebook.com\\/","twitter":"https:\\/\\/twitter.com\\/","linkedin":"https:\\/\\/linkedin.com\\/","instagram":"https:\\/\\/www.instagram.com\\/"}'),
      array('id' => '11','post_id' => '6','key' => 'description','value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
      array('id' => '12','post_id' => '6','key' => 'preview','value' => '/demo/16781252849ApdWcy0jUhLRb9QtCL4.png'),
      array('id' => '13','post_id' => '7','key' => 'excerpt','value' => '{"facebook":"https:\\/\\/www.facebook.com\\/","twitter":"https:\\/\\/twitter.com\\/","linkedin":"https:\\/\\/linkedin.com\\/","instagram":"https:\\/\\/www.instagram.com\\/"}'),
      array('id' => '14','post_id' => '7','key' => 'description','value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
      array('id' => '15','post_id' => '7','key' => 'preview','value' => '/demo/1678125323UINo4L0ZND1ErxlWCAFu.png'),
      array('id' => '16','post_id' => '8','key' => 'preview','value' => '/assets/images/blog/blog_img_09.jpg'),
      array('id' => '17','post_id' => '8','key' => 'short_description','value' => 'This response is important for our ability to from mistakes but it also gives rise to self-criticism imperdiet nulla malesu elit.'),
      array('id' => '18','post_id' => '8','key' => 'main_description','value' => '<p>One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in future The same is true as we experienc the emotional of stress from our instances. We are quickly learn to fear and thus automatically. Lorem ipsum dolor sit amet.</p><blockquote><p>“Everything is designed.<br>Few things are designed well."</p></blockquote><p>Brian Reed, front-end developer</p><h3>Work Harder &amp; Gain Success</h3><p>One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in quis elit future. The same Duis aute irure dolor in reprehenderit .</p><p><br>&nbsp;</p><p>is true as we experience the emotional sensation of stress from our firs social rejec ridicule. We quickly learn to fear and thus automatically. potentially stressful situation of wlir ext quiert all kinds, including the most common of all.</p>'),
      array('id' => '19','post_id' => '8','key' => 'seo','value' => '{"title":"Boost your business growth with WhatsApp Quality Based Messaging","description":"In a world that\\u2019s increasingly getting commoditized, thanks to technology, it\\u2019s an open secret that customer focus is the real differentiator. This Gospel truth is germane to every business function, but in marketing it\\u2019s indispensable. Reason being the constantly changing needs, wants and desires of customers. New age marketing therefore, is all about unique individual experiences through tools that bring brands closer to their customer.","tags":"jobi, job, envato"}'),
      array('id' => '20','post_id' => '9','key' => 'preview','value' => '/assets/images/blog/blog_img_10.jpg'),
      array('id' => '21','post_id' => '9','key' => 'short_description','value' => 'ChatGPT is an artificial intelligence (AI) chatbot that uses natural language processing to create humanlike conversational dialogue. The language model can respond to questions and compose various written content, including articles, social media posts, essays, code and emails.'),
      array('id' => '22','post_id' => '9','key' => 'main_description','value' => '<p>This response is important for our ability to from mistakes but it also gives rise to self-criticism imperdiet nulla malesu elit.</p><p>One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in future The same is true as we experienc the emotional of stress from our instances. We are quickly learn to fear and thus automatically. Lorem ipsum dolor sit amet.</p><blockquote><p>“Everything is designed.<br>Few things are designed well."</p></blockquote><p>Brian Reed, front-end developer</p><h3>Work Harder &amp; Gain Success</h3><p>One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in quis elit future. The same Duis aute irure dolor in reprehenderit .</p><p><br>&nbsp;</p><p>is true as we experience the emotional sensation of stress from our firs social rejec ridicule. We quickly learn to fear and thus automatically. potentially stressful situation of wlir ext quiert all kinds, including the most common of all.</p>'),
      array('id' => '23','post_id' => '9','key' => 'seo','value' => '{"title":"What Is ChatGPT? Everything You Need to Know","description":"In the competitive business landscape, if there\\u2019s one thing that has led to the massive growth of internet businesses, it is digital advertising. The $600 billion industry holds an outsized control on customers\\u2014- who buys what and thus to the fortunes of these businesses. An interesting aspect of digital advertising is its dynamic and ever-evolving nature, from search ads to video and voice search with the latest being Click to Chat ads. Click to Chat ads, although at a nascent stage currently,","tags":"jobi, job, envato"}'),
      array('id' => '24','post_id' => '10','key' => 'preview','value' => '/assets/images/blog/blog_img_08.jpg'),
      array('id' => '25','post_id' => '10','key' => 'short_description','value' => 'ChatGPT (Conversational Generative Pre-trained Transformer) is a newly released open-source conversational AI platform. It has been praised for its ability to generate natural language responses to user inputs, and many have hailed it as the next step in creating more human-like conversations. However, despite its promise, certain limitations still prevent it from being a viable replacement for other conversational AI platforms. Let’s explore these limitations and how they can be addressed.'),
      array('id' => '26','post_id' => '10','key' => 'main_description','value' => 'How is ChatGPT different from Conversational AI?
                  As an AI language model, ChatGPT can provide conversational capabilities that can be helpful for certain use cases, such as answering general questions or providing basic support. However, it is not designed to replace enterprise conversational AI platforms for several reasons:
          
                  Fine-tuning and customization: Enterprise conversational AI platforms can be customized to meet specific business needs and integrate with their existing systems of records, providing a more tailored solution. ChatGPT, on the other hand, is a general-purpose AI language model and may not be able to meet the specific needs of every business.
                  Security and compliance: Enterprise conversational AI platforms often have security and compliance features built-in, ensuring that sensitive data is protected and regulatory requirements are met. ChatGPT is not specifically designed for enterprise-level security and compliance requirements.
                  Integrations: Enterprise conversational AI platforms can integrate with other systems and applications, allowing for a more seamless experience for users. ChatGPT does not have the same level of integration capabilities.
                  Support and maintenance: Enterprise conversational AI platforms often provide support and maintenance services to ensure that the system is running smoothly and to address any issues that arise. ChatGPT does not provide this level of support and maintenance.
                  Scalability: Enterprise conversational AI platforms can be scaled to handle large volumes of user interactions, while ChatGPT may not be able to handle the same level of scalability.
                  In summary, while ChatGPT can provide conversational capabilities for certain use cases, it is not designed to replace enterprise conversational AI platforms, which offer greater customization, security, integration, support, maintenance, and scalability capabilities to meet the needs of large businesses.'),
      array('id' => '27','post_id' => '10','key' => 'seo','value' => '{"title":"Designer\\u2019s Checklist for Every UX\\/UI Project.","description":"ChatGPT (Conversational Generative Pre-trained Transformer) is a newly released open-source conversational AI platform. It has been praised for its ability to generate natural language responses to user inputs, and many have hailed it as the next step in creating more human-like conversations. However, despite its promise, certain limitations still prevent it from being a viable replacement for other conversational AI platforms. Let\\u2019s explore these limitations and how they can be addressed.","tags":"wa, whatsapp, devstation, qserve, whatsserve"}'),
      array('id' => '30','post_id' => '12','key' => 'excerpt','value' => 'Seattle opera simplifies Performance planning with jobi eSignature.'),
      array('id' => '31','post_id' => '12','key' => 'preview','value' => '/uploads/24/01/1qRPkYPgr1wDBk0jNHwD.jpg'),
      array('id' => '32','post_id' => '13','key' => 'excerpt','value' => 'How DocuSign CLM helps Celonis scale its global business.'),
      array('id' => '33','post_id' => '13','key' => 'preview','value' => '/uploads/24/01/FpcYS3UICo5z86GtwmGo.jpg'),
      array('id' => '34','post_id' => '14','key' => 'excerpt','value' => 'Seattle opera simplifies Performance planning with jobi eSignature.'),
      array('id' => '35','post_id' => '14','key' => 'preview','value' => '/uploads/24/01/dUa8GbxBAy7utmV9PxCD.jpg'),
      array('id' => '36','post_id' => '15','key' => 'excerpt','value' => 'Boost digital finance adoption with instant balance inquiries, portfolio recommendations, hassle-free claims settlement, cross-sell and more'),
      array('id' => '37','post_id' => '16','key' => 'excerpt','value' => 'Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'),
      array('id' => '38','post_id' => '17','key' => 'excerpt','value' => 'Apply & get your preferable jobs with all the requirements and get it.'),
      array('id' => '39','post_id' => '17','key' => 'main_description','value' => 'Apply & get your preferable jobs with all the requirements and get it.'),
      array('id' => '40','post_id' => '17','key' => 'preview','value' => '/assets/images/icon/icon_08.svg'),
      array('id' => '41','post_id' => '17','key' => 'banner','value' => '/demo/1678143446kru2cExnnwONsqF55Nc6.png'),
      array('id' => '42','post_id' => '18','key' => 'excerpt','value' => 'Complete your profile with all the info to get attention of client.'),
      array('id' => '43','post_id' => '18','key' => 'main_description','value' => 'Complete your profile with all the info to get attention of client.'),
      array('id' => '44','post_id' => '18','key' => 'preview','value' => '/assets/images/icon/icon_09.svg'),
      array('id' => '45','post_id' => '18','key' => 'banner','value' => '/demo/1678177857DqLCX7BJooFwWYFnY3mH.png'),
      array('id' => '46','post_id' => '19','key' => 'excerpt','value' => 'It’s very easy to open an account and start your journey.'),
      array('id' => '47','post_id' => '19','key' => 'main_description','value' => 'It’s very easy to open an account and start your journey.'),
      array('id' => '48','post_id' => '19','key' => 'preview','value' => '/assets/images/icon/icon_10.svg'),
      array('id' => '49','post_id' => '19','key' => 'banner','value' => '/demo/1678178152NI8xZNWqa96WzC13Aytg.gif'),
      array('id' => '62','post_id' => '23','key' => 'excerpt','value' => 'Jobi is the best quaint james bond victoria sponge happy days cras.'),
      array('id' => '63','post_id' => '24','key' => 'excerpt','value' => 'No you can simply register with your email'),
      array('id' => '64','post_id' => '25','key' => 'excerpt','value' => 'Jobi has supported free 10 days trial. You don\'t need to add credit card information.'),
      array('id' => '65','post_id' => '26','key' => 'description','value' => '<p>Thank you for using Jobi! These Terms and Conditions ("Terms") govern your use of the Jobi website (jobi.nexilate.xyz), a job board marketplace. By accessing or using Jobi, you agree to comply with and be bound by these Terms. If you do not agree with these Terms, please refrain from using our services.</p><p>### 1. Use of Jobi:</p><p>1.1 <strong>Eligibility</strong><br>&nbsp; - You must be at least 18 years old to use Jobi. By using Jobi, you affirm that you are at least 18 years old and capable of forming a binding contract.</p><p>1.2 <strong>User Account:</strong><br>&nbsp; - To access certain features of Jobi, you may be required to create a user account. You are responsible for maintaining the confidentiality of your account information.</p><p>### 2. Job Listings and Applications:</p><p>2.1 <strong>Accuracy of Information:</strong><br>&nbsp; - Employers are responsible for the accuracy of the job listings they post on Jobi. Jobi does not guarantee the accuracy, completeness, or authenticity of job listings.</p><p>2.2 <strong>Application Process:</strong><br>&nbsp; - Job seekers using Jobi may apply to job listings through the platform. Employers are responsible for managing the application process and communicating with applicants.</p><p>### 3. Prohibited Conduct:</p><p>3.1 <strong>Misuse of Jobi:</strong><br>&nbsp; - You agree not to misuse Jobi, including but not limited to engaging in unauthorized access, data scraping, or any activity that may disrupt the functionality of the platform.</p><p>3.2 <strong>False Information:</strong><br>&nbsp; - Providing false information, whether as a job seeker or employer, is strictly prohibited. Jobi reserves the right to suspend or terminate accounts found to be in violation of this policy.</p><p>### 4. Intellectual Property:</p><p>4.1 <strong>Ownership:</strong><br>&nbsp; - All content on Jobi, including but not limited to text, graphics, logos, and software, is the property of Jobi or its licensors and is protected by intellectual property laws.</p><p>4.2 <strong>License:</strong><br>&nbsp; - By submitting content (such as job listings or resumes) to Jobi, you grant Jobi a non-exclusive, worldwide, royalty-free, sublicensable license to use, reproduce, modify, and distribute the content.</p><p>### 5. Privacy:</p><p>5.1 <strong>Privacy Policy:</strong><br>&nbsp; - The collection and use of personal information on Jobi are governed by our Privacy Policy. By using Jobi, you consent to the terms of the Privacy Policy.</p><p>### 6. Termination:</p><p>6.1 <strong>Termination by Jobi:</strong><br>&nbsp; - Jobi reserves the right to terminate or suspend your access to the platform at any time for violations of these Terms or for any other reason.</p><p>### 7. Changes to Terms:</p><p>7.1 <strong>Updates:</strong><br>&nbsp; - Jobi may update or modify these Terms at any time. Any changes will be effective immediately upon posting the revised Terms on Jobi. It is your responsibility to review these Terms periodically.</p><p>### 8. Contact Us:</p><p>If you have any questions or concerns regarding these Terms and Conditions, please contact us at <strong>contact@jobi.nexilate.xyz</strong>.</p><p>Thank you for using Jobi!</p>'),
      array('id' => '66','post_id' => '26','key' => 'seo','value' => '{"title":"terms and conditions","description":"orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, w","tags":"jobi, job, envato"}'),
      array('id' => '67','post_id' => '27','key' => 'description','value' => '<p>Thank you for using Jobi! This Privacy Policy outlines the types of information collected from users of the Jobi website (jobi.nexilate.xyz) and how that information is used, stored, and protected. By accessing or using Jobi, you agree to the terms of this Privacy Policy.</p><p><strong>Information We Collect:</strong></p><p><strong>Personal Information:</strong></p><ul><li>When you create an account on Jobi, we may collect personal information such as your name, email address, and other relevant details.</li></ul><p><strong>User-Generated Content:</strong></p><ul><li>Jobi allows users to create profiles and submit content such as resumes, job preferences, and other information relevant to job searching.</li></ul><p><strong>Usage Data:</strong></p><ul><li>We collect information about your interactions with Jobi, including your browsing history, search queries, and other usage patterns.</li></ul><p><strong>Device Information:</strong></p><ul><li>We may collect information about the device you are using to access Jobi, including device type, operating system, and browser type.</li></ul><p><strong>How We Use Your Information:</strong></p><p><strong>To Provide Services:</strong></p><ul><li>We use the information collected to provide you with the services offered on Jobi, including job recommendations, communication with employers, and other features.</li></ul><p><strong>Personalization:</strong></p><ul><li>Jobi may use your information to personalize your experience, such as providing tailored job recommendations based on your preferences.</li></ul><p><strong>Communication:</strong></p><ul><li>We may use your email address to send you important updates, newsletters, and other relevant information related to Jobi.</li></ul><p><strong>Improvement of Services:</strong></p><ul><li>We use aggregated and anonymized data to analyze user behavior and improve the functionality and user experience of Jobi.</li></ul><p><strong>How We Protect Your Information:</strong></p><p><strong>Security Measures:</strong></p><ul><li>We implement industry-standard security measures to protect your personal information from unauthorized access, disclosure, alteration, and destruction.</li></ul><p><strong>Data Access Control:</strong></p><ul><li>Access to your personal information is restricted to authorized personnel who require the information to perform their job functions.</li></ul><p><strong>Third-Party Services:</strong></p><ol><li><strong>External Links:</strong><ul><li>Jobi may contain links to third-party websites. We are not responsible for the privacy practices or content of these external sites.</li></ul></li></ol><p><strong>Your Choices:</strong></p><p><strong>Account Settings:</strong></p><ul><li>You can review and update your account information and privacy settings in the account settings section of Jobi.</li></ul><p><strong>Communication Preferences:</strong></p><ul><li>You can choose to opt-out of promotional emails by following the instructions provided in the emails.</li></ul><p><strong>Changes to Privacy Policy:</strong></p><p>We reserve the right to update and modify this Privacy Policy. Any changes will be effective immediately upon posting the revised Privacy Policy on Jobi. It is your responsibility to review this Privacy Policy periodically.</p><p><strong>Contact Us:</strong></p><p>If you have any questions or concerns regarding this Privacy Policy, please contact us at <strong>contact@jobi.nexilate.xyz</strong>.</p><p>Thank you for choosing Jobi for your job search needs!</p>'),
      array('id' => '68','post_id' => '27','key' => 'seo','value' => '{"title":"Privacy Policy","description":"Privacy Policy Page","tags":"policy, privacy"}'),
      array('id' => '71','post_id' => '14','key' => 'banner','value' => '/uploads/24/01/ZVLfxYynFSpXxGeDJe8m.png'),
      array('id' => '72','post_id' => '13','key' => 'banner','value' => '/uploads/24/01/K4i1rDcKfztcc3PNIxLf.png'),
      array('id' => '73','post_id' => '12','key' => 'banner','value' => '/uploads/24/01/rri6rsr3hiigpgvcXtBt.png')
    );

    Postmeta::insert($postmetas);
  }
}
