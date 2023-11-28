@extends('properties.layouts.main')

@section('content')

<style>
    p {
        margin-bottom: 10px
    }
    a {
        color: #282828;
    }
    .number_list li {
        list-style: auto;
    }
    .bullet_list li {
        list-style: circle !important;
    }
    .roman_list li {
        list-style: lower-roman;
        color: #282828;
    }
    .upper_alpha_list li {
        list-style: upper-alpha !important;
    }
    .bullet_list2 li {
        list-style: disc;
    }
    ol,
    ul,
    li {
        margin-left: 10px;
    }
</style>

<section class="container my-5">

    <div class="text-center">
        <h1 class="font-bold">
            <strong>ARIS360 Terms of Use</strong>
        </h1>

    </div>

    <p>
        These Terms of Use were updated on January 1, 2020. Your continued use of the Services constitutes your
        acceptance of these Terms and the terms of the applicable Services Addendum governing the particular
        Services provided to you by a ARIS360 Homes Company pursuant to that Services Addendum. The Services are
        owned and operated by ARIS360 Homes Corporation, a technology-powered real estate brokerage headquartered
        at 5209 Lake Washington Blvd NE Suite 220, Kirkland, WA 98033. If you are located in Canada, you are
        also entering this agreement with ARIS360 Homes Unlimited Liability Company, which holds the brokerage
        license for users in Canada (collectively with ARIS360 Homes Corporation "ARIS360 Homes").
    </p>

    <h2>TERMS OF USE</h2>

    <p>
        Welcome! These Terms constitute part of the Agreement regarding the Services between you and the
        applicable ARIS360 Homes Company. These Terms provide important information to you, including information
        about your obligations when using the Services, about content you access through the Services, about
        content you contribute to the Services, and about the limits of our liability to you. By accessing,
        downloading, or using any portion of the Services, you signify that you accept the terms of the
        Agreement.
    </p>

    <p>
        The Services are, in whole or in part, accessible through the Sites. Your use of and access to each
        Service is subject to these Terms and the terms of the applicable Services Addendum. Please review each
        applicable Services Addendum because your use of the corresponding Site and Service constitutes your
        agreement to the terms of the Services Addendum.
    </p>

    <p>
        <strong>
            PLEASE NOTE: WHERE PERMITTED BY APPLICABLE LAW, WHEN YOU AGREE TO THIS AGREEMENT AND THESE TERMS YOU
            ARE AGREEING (WITH LIMITED EXCEPTION) TO RESOLVE ANY CLAIM BETWEEN YOU AND A ARIS360 HOMES COMPANY
            THROUGH BINDING, INDIVIDUAL ARBITRATION RATHER THAN IN COURT. PLEASE REVIEW CAREFULLY SECTION 2.13.9
            BELOW FOR DETAILS REGARDING ARBITRATION (INCLUDING THE PROCEDURE TO OPT OUT OF ARBITRATION). THIS
            AGREEMENT ALSO CONTAINS A CLASS ACTION WAIVER.
            BY ENTERING INTO THIS AGREEMENT, YOU ACKNOWLEDGE THAT YOU UNDERSTAND THIS AGREEMENT AND AGREE TO ALL
            OF ITS TERMS AND CONDITIONS. IF YOU DO NOT AGREE TO BE BOUND BY THE TERMS AND CONDITIONS OF THIS
            AGREEMENT, YOU MAY NOT USE OR ACCESS THE SERVICES.
        </strong>
    </p>

    <ol class="number_list">
        <li>
            <h5>Definitions.</h5>
            <ol class="roman_list">
                <li>
                    <strong>"AAA"</strong> means the American Arbitration Association.
                </li>
                <li>
                    <strong>"AAA Rules"</strong> means the Consumer Arbitration Rules of the AAA.
                </li>
                <li>
                    <strong>"Agreement"</strong> means, collectively and as applicable to you, these Terms, the
                    applicable
                    Services Addendum, and all other applicable terms, conditions, and policies,
                    including <a href="{{url('homes-privacy-notice')}}" target="_blank">Privacy
                        Notice</a> , that we make available to you in connection with your use of the
                    Services.
                </li>
                <li>
                    <strong>"Claim"</strong> means any dispute, controversy or claim arising between you and a
                    ARIS360 Homes Company.
                </li>
                <li>
                    <strong>"Class Action Waiver"</strong> has the meaning set forth in Section 2.13.9.2 of
                    these Terms.
                </li>
                <li>
                    <strong>"Feedback"</strong> means feedback, comments, and suggestions for improvements in
                    connection with the Sites and Services.
                </li>
                <li>
                    <strong>"ARIS360 Homes Company"</strong> or <strong>"ARIS360 Homes Companies"</strong> or
                    <strong>"our"</strong> or <strong>"we"</strong> means, collectively or as
                    applicable to you, the specific entity, and/or the affiliates of such entity, providing the
                    Services as identified in the applicable Services Addendum.
                </li>
                <li>
                    <strong>"Services Addendum"</strong> means any applicable addendum incorporated by reference
                    into this Agreement that contains additional terms and provisions concerning the respective
                    Services.
                </li>
                <li>
                    <strong>"Services"</strong> means, collectively or as applicable to you, the Sites and
                    services provided by the ARIS360 Homes Companies pursuant to this Agreement and any applicable
                    Services Addendum.
                </li>
                <li>
                    <strong>"Sites"</strong> means the websites and mobile applications maintained by or on
                    behalf of the ARIS360 Homes Companies through which the ARIS360 Homes Companies may offer
                    services.
                </li>
                <li>
                    <strong>"Terms"</strong> means these Terms of Use.
                </li>
                <li>
                    <strong>"Testing"</strong> has the meaning set forth in Section 2.13.6 of these Terms
                </li>
                <li>
                    <strong>"Third Party Content"</strong> means Your Content and any data, content,
                    information, or other materials provided by a third party, including, without limitation (i)
                    such content and information other users of the Services provide to us or upload to the
                    Services, excluding any personally identifiable information, the collection, processing, or
                    any other use of which is governed by the ARIS360 Homes Companies' <a
                        href="{{url('homes-privacy-notice')}}" target="_blank">Privacy Notice;</a>
                    and (ii)
                    content and information posted or provided by our service providers, or any third party
                    multiple listing service, broker, or agent.
                </li>
                <li>
                    <strong>"Third Party Sites"</strong> means third party websites.
                </li>
                <li>
                    <strong>"Your Content"</strong> means your Feedback and any data, content, information,
                    ideas, comments, property information, listing information, photos, or other materials that
                    you provide to us or upload to the Services, excluding any personally identifiable
                    information, the collection, processing, or any other use of which is governed by the ARIS360
                    Homes Companies' <a href="{{url('homes-privacy-notice')}}"
                        target="_blank">Privacy Notice.</a>
                </li>

            </ol>
            <p>
                All other capitalized terms will have the meaning as provided elsewhere in this Agreement.
            </p>
        </li>
        <li>
            <h5>GENERAL TERMS</h5>
            <ol class="roman_list">
                <li>
                    Who May Use the Services. To access and use the Services, you must be at least the age of
                    majority in the state, province, or territory where you live or at least 18 years of age. If
                    you are under the age of 13, you may not use the Services and you should not be visiting the
                    Sites or using the Services. For additional user requirements, if any, please see the
                    applicable Services Addendum.
                </li>
                <li>
                    Third Party Sites and Linked Materials. The Services may include links to Third Party Sites.
                    You should review any applicable terms or <a
                        href="{{url('homes-privacy-notice')}}" target="_blank">Privacy Notice</a> of
                    a Third Party Site before using
                    it or sharing any information with it, because you may give the third party permission to
                    use your information in ways we would not. The ARIS360 Homes Companies are not responsible for
                    and do not endorse any features, content, advertising, products or other materials on or
                    available through Third Party Sites, even if originally accessed via a link on the Sites.
                </li>
                <li>
                    <h6>Intellectual Property Rights, License and Ownership.</h6>
                    <ul class="bullet_list2">
                        <li>
                            ARIS360 Homes Companies Intellectual Property. Except as otherwise provided in this
                            Agreement, the ARIS360 Homes Companies and their licensors own all right, title, and
                            interest in and to the Services and all materials and information (including source
                            code, data, text, images, and other content) contained on or in the Services, and
                            you acknowledge that all such content is protected by copyright, trademark, and
                            other laws of the United States and foreign countries.
                        </li>
                        <li>
                            License Granted to You. Each ARIS360 Homes Company, as applicable, grants you a
                            limited, personal, non-exclusive, non-transferable, non-sublicensable, revocable
                            license to access, view, and use the Services so long as your use complies with this
                            Agreement, the applicable Services Addendum and any other applicable policies.
                            Unless you are otherwise explicitly granted permission, this Agreement does not
                            grant you any right or license with respect to any trademarks, service marks,
                            graphics, or logos.
                        </li>
                        <li>
                            Restrictions. You may not modify, decompile, dissemble, reverse-engineer, reproduce,
                            redistribute, create derivative works based upon, or attempt to commercially gain
                            from your use or misuse of the Services, or any of their components, except as
                            permitted by the Services. You may not use any meta-tags or other hidden text using
                            any ARIS360 Homes Company name, trademark, service mark, graphic or logo without the
                            respective ARIS360 Homes Company's specific written permission. You may not remove,
                            obscure, or modify any copyright or other intellectual property notices that appear
                            on or in the Services. You may not use the Services in any way that violates any law
                            or regulation, this Agreement, any of the ARIS360 Homes Companies' policies, or any
                            third party policy, that applies to you. You may not use the Services in any manner
                            that harms the ARIS360 Homes Companies, our service providers, our suppliers, other
                            users of the Services, or any other person. We may revoke your permission to access
                            and use the Services or terminate your access to and use of the Services, and we may
                            block or prevent you from accessing the Services, in our discretion. If you violate
                            these Terms or the Agreement, your permission to access and use the Services is
                            automatically revoked.
                        </li>
                        <li>
                            No Right to Reproduce. These Terms do not provide you a license to use, reproduce,
                            distribute, display or provide access to any portion of the Services on Third Party
                            Sites or otherwise.
                        </li>
                        <li>
                            No Scrubbing or Scraping. You may not automatedly crawl or query the Services for
                            any purpose or by any means (including, without limitation, screen and database
                            scraping, spiders, robots, crawlers and any other automated activity with the
                            purpose of obtaining information from the Services) unless you have received prior
                            express written permission from the applicable ARIS360 Homes Company.
                        </li>
                        <li>
                            Feedback. You may give a ARIS360 Homes Company Feedback. You hereby assign to the
                            applicable ARIS360 Homes Company all of your right, title, and interest in and to the
                            Feedback. To the extent applicable law does not permit assignment of the Feedback,
                            you hereby grant the ARIS360 Homes Companies a perpetual, irrevocable, worldwide,
                            exclusive, transferable, sublicensable, fully paid-up, royalty-free license to use
                            the Feedback in any manner in which the ARIS360 Homes Companies see fit. You hereby
                            irrevocably waive, to the fullest extent permitted by applicable law, any claims and
                            assertions of moral rights or attribution with respect to your Feedback.
                        </li>
                        <li>
                            Reservation of Rights. Except for the limited licenses granted in this Agreement, we
                            reserve all of our rights, interests, and title in and to the Services.
                        </li>
                    </ul>
                </li>
                <li>
                    Your Content. You grant to the ARIS360 Homes Companies a worldwide, non-exclusive,
                    transferable, sublicensable, fully paid-up, royalty-free license to use, reproduce, modify
                    (for formatting purposes only), distribute, and perform and display publicly Your Content
                    (excluding Feedback) in connection with provision of the Services to you or otherwise in
                    connection with your permitted use of the Services. In addition to any of Your Content that
                    is made available through the Services, we may share Your Content with our affiliates,
                    service providers and/or subcontractors in order to deliver, develop, or improve the
                    Services. You hereby irrevocably waive, to the fullest extent permitted by applicable law,
                    any claims and assertions of moral rights or attribution with respect to Your Content.
                    Notwithstanding anything in the Agreement to the contrary, no ARIS360 Homes Company has any
                    obligation to store or display Your Content. The ARIS360 Homes Companies may, but are not
                    obligated to, monitor, modify, or remove Your Content at any time in their sole discretion.
                    You agree that the ARIS360 Homes Companies may promote and market Your Content in connection
                    with the Services.
                </li>
                <li>
                    Provision of Services and Communications with You. To access or use certain Services or
                    features of the Services, you may need to register and create an account with the applicable
                    ARIS360 Homes Company. See the applicable Services Addendum for additional terms and conditions
                    in connection with any such registration. For purposes of responding to you and providing
                    you with information and notices about your account or the Services, you agree that we may
                    communicate with you through the contact information associated with your account. We have
                    no liability rising from your failure to maintain accurate contact or other information,
                    including, without limitation, your failure to receive critical information about the
                    Services. When you request information from us, you are extending an express invitation for
                    us to contact you.
                </li>
                <li>
                    Forums. The ARIS360 Homes Companies may offer forums where you can post your observations and
                    comments on designated topics or on public boards. For certain Services, account holders can
                    create forum topic threads. The ARIS360 Homes Companies, in their sole discretion, may close or
                    transfer threads, or modify or remove content from them. Please note that everything you
                    share in a forum may be seen and used by other users of the applicable Services. No ARIS360
                    Homes Company is responsible or liable for anything posted by non-ARIS360 Homes Company persons
                    on the forums nor is any ARIS360 Homes Company responsible or liable for monitoring the content
                    or activities associated with the forums.
                </li>
                <li>
                    Your Representations. You represent and warrant that (i) you have the ability to enter into
                    this Agreement and grant all assignments, licenses, and permissions contemplated or
                    contained herein; (ii) your use of the Services will be in compliance with all laws,
                    regulations, this Agreement, any ARIS360 Homes Company's policies, and third party policies, if
                    and as applicable to you; (iii) Your Content and any Feedback are original to you and do not
                    infringe, misappropriate, or otherwise violate the rights, including any intellectual
                    property rights or rights of publicity or privacy, of any person; (iv) Your Content and any
                    Feedback do not contain any obscene, libelous, defamatory, abusive, or inappropriate
                    content; and (v) our use of Your Content and any Feedback you provide will not infringe,
                    misappropriate, or otherwise violate the rights, including any intellectual property rights
                    or rights of publicity or privacy, of any person.
                </li>

                <li>
                    Termination. If you have created an account to access the Services, you may deactivate your
                    account at any time by visiting your Account Settings or you may contact the applicable ARIS360
                    Homes Company's Customer Service. You hereby acknowledge and agree that we reserve the right
                    at any time to modify or discontinue the Services, in whole or in part, with or without
                    notice, and that we will not be responsible or liable, directly or indirectly, to you or any
                    other person or entity for any loss or damage of any kind incurred as a result of any such
                    modifications or discontinuance.
                </li>

                <li>
                    Indemnification. You agree to defend, indemnify, and hold each ARIS360 Homes Company, and its
                    respective agents, employees, directors, officers and representatives harmless from and
                    against all claims and expenses (including, without limitation, reasonable attorneys' fees
                    and costs) ARIS360ing out of (a) your failure to comply with applicable laws, regulations, this
                    Agreement, any ARIS360 Homes Company's policies, and third party policies, if and as applicable
                    to you; (b) Your Content and Feedback; (c) the ARIS360 Homes Companies' use of Your Content and
                    Feedback as contemplated or permitted under this Agreement; or (d) any activity in which you
                    engage on or in the Services.
                </li>

                <li>
                    <p>
                        Disclaimers. EACH ARIS360 HOMES COMPANY PROVIDES THE SERVICES ON AN "AS IS" AND "AS
                        AVAILABLE"
                        BASIS. THE ARIS360 HOMES COMPANIES DO NOT CONTROL OR VET THIRD-PARTY CONTENT FOR ACCURACY.
                        TO
                        THE FULLEST EXTENT PERMISSIBLE UNDER APPLICABLE LAW, THE ARIS360 HOMES COMPANIES DO NOT
                        PROVIDE
                        ANY EXPRESS OR IMPLIED WARRANTIES, CONDITIONS, OR REPRESENTATIONS REGARDING THE SERVICES
                        AND
                        EACH ARIS360 HOMES COMPANY AND ITS SERVICE PROVIDERS AND LICENSORS DISCLAIM ANY AND ALL
                        IMPLIED
                        WARRANTIES, CONDITIONS, AND REPRESENTATIONS, INCLUDING, WITHOUT LIMITATION, ANY
                        WARRANTIES
                        OR CONDITIONS OF MERCHANTABILITY, MERCHANTABLE QUALITY, DURABILITY, FITNESS FOR A
                        PARTICULAR
                        PURPOSE, TITLE, ACCURACY OF DATA, AND NONINFRINGEMENT.
                    </p>
                    <p>
                        No ARIS360 Homes company is responsible for any errors in displayed information or delays
                        in displaying information ON THE SITES, including without limitation any THIRD PARTY
                        CONTENT. No ARIS360 HOMES COMPANY TAKES RESPONSIBILITY OR ASSUMES ANY LIABILITY FOR ANY
                        THIRD PARTY CONTENT. ANY USE OR RELIANCE ON ANY THIRD PARTY CONTENT OR OTHER INFORMATION
                        ON THE SERVICES OR OBTAINED BY YOU THROUGH THE SERVICES IS AT YOUR OWN RISK, INCLUDING
                        INFORMATION PROVIDED BY OR FOR A ARIS360 HOMES COMPANY. NO ARIS360 HOMES COMPANY IS
                        RESPONSIBLE FOR THE ACTS OR OMISSIONS OF, OR ANY CONTENT OR INFORMATION PROVIDED BY ANY
                        THIRD PARTY, INCLUDING, WITHOUT LIMITATION, A MULTIPLE LISTING SERVICE OR AN AGENT
                        PARTICIPATING IN THE ARIS360 HOMES PARTNER PROGRAM.
                    </p>
                    <p>
                        NO ARIS360 HOMES COMPANY IS RESPONSIBLE FOR, AND NO ARIS360 HOMES COMPANY MAKES ANY
                        REPRESENTIONS OR WARRANTIES REGARDING, THE DELIVERY OF ANY MESSAGES (SUCH AS POSTING OF
                        ANSWERS OR TRANSMISSION OF ANY CONTENT) SENT THROUGH THE SERVICES. NO ARIS360 HOMES COMPANY
                        HAS ANY OBLIGATION TO VERIFY THE IDENTITY OF THE PERSONS USING ITS SERVICES, NOR DOES
                        ANY ARIS360 HOMES COMPANY HAVE ANY OBLIGATION TO MONITOR THE USE OF ITS SERVICES. EACH ARIS360
                        HOMES COMPANY DISCLAIMS ALL LIABILITY FOR IDENTITY THEFT OR ANY OTHER MISUSE OF YOUR
                        IDENTITY OR INFORMATION BY OTHERS.
                    </p>
                    <p>
                        NO ARIS360 HOMES COMPANY MAKES ANY GUARANTEE THAT THE SERVICES WILL FUNCTION WITHOUT
                        INTERRUPTION OR ERRORS AND EACH ARIS360 HOMES COMPANY DISCLAIMS ALL LIABILITY FOR DAMAGES
                        CAUSED BY ANY SUCH INTERRUPTION OR ERRORS.
                    </p>
                    <p>
                        THE INFORMATION ON THE SERVICES IS NOT AN OFFER OR SOLICITATION BY ANYONE IN ANY
                        JURISDICTION IN WHICH AN OFFER OR SOLICITATION CANNOT LEGALLY BE MADE, OR TO ANY PERSON
                        TO WHOM IT IS UNLAWFUL TO MAKE A SOLICITATION.
                    </p>
                    <p>
                        THE VIEWS EXPRESSED ON THE SERVICES IN THIRD PARTY CONTENT, INCLUDING, WITHOUT
                        LIMITATION, POSTS TO FORUMS, DO NOT NECESSARILY REPRESENT OR REFLECT THE VIEWS OF THE
                        ARIS360 HOMES COMPANIES. NO ARIS360 HOMES COMPANY IS RESPONSIBLE FOR, AND DISCLAIMS ANY AND
                        ALL LIABILITY IN RELATION TO THIRD PARTY CONTENT.
                    </p>
                </li>

                <li>
                    Limitations of Liability. IN NO EVENT WILL ANY ARIS360 HOMES COMPANY OR ANY OF THEIR AGENTS,
                    EMPLOYEES, DIRECTORS, OFFICERS OR REPRESENTATIVES BE LIABLE FOR ANY INDIRECT, CONSEQUENTIAL,
                    SPECIAL, INCIDENTAL, OR PUNITIVE DAMAGES ARIS360ING OUT OF, BASED ON, OR RESULTING FROM THESE
                    TERMS, THE AGREEMENT, OR YOUR USE OF THE SERVICES, EVEN IF A PARTY HAS BEEN ADVISED OF THE
                    POSSIBILITY OF SUCH DAMAGES. THESE LIMITATIONS AND EXCLUSIONS APPLY WITHOUT REGARD TO
                    WHETHER THE DAMAGES ARIS360E FROM (A) BREACH OF CONTRACT, (B) BREACH OF WARRANTY, (C)
                    NEGLIGENCE, OR (D) ANY OTHER CAUSE OF ACTION, TO THE EXTENT SUCH EXCLUSION AND LIMITATIONS
                    ARE NOT PROHIBITED BY APPLICABLE LAW. IF YOU DO NOT AGREE WITH ANY PART OF THIS AGREEMENT,
                    OR YOU HAVE ANY DISPUTE OR CLAIM AGAINST A ARIS360 HOMES COMPANY, ITS AGENTS, EMPLOYEES,
                    DIRECTORS, OFFICERS OR REPRESENTATIVES WITH RESPECT TO THIS AGREEMENT OR THE SERVICES, THEN
                    EXCEPT AS SPECIFICALLY PROVIDED IN THIS AGREEMENT OR WHERE THE LAW REQUIRES A DIFFERENT
                    STANDARD, YOUR SOLE AND EXCLUSIVE REMEDY IS TO TERMINATE YOUR ACCOUNT FOR SUCH SERVICES, IF
                    APPLICABLE, AND/OR DISCONTINUE USING THE SERVICES.
                </li>

                <li>
                    Copyright and Intellectual Property Policy. The ARIS360 Homes Companies respect the
                    intellectual property rights of others and expect our users to do the same. It is the ARIS360
                    Homes Companies' policy to terminate, in appropriate circumstances, account holders who
                    repeatedly infringe or are believed to be repeatedly infringing the rights of copyright
                    holders. If you believe your copyright or other intellectual property right is being
                    infringed, misappropriated, or otherwise violated by a user of the Services, or you believe
                    such a claim has been unfairly made against your account, please see the ARIS360 Homes
                    Companies' Copyright & Intellectual Property Policy <a
                        href="{{url('homes-privacy-notice')}}" target="_blank">[1]</a>
                </li>
                <li>
                    <h6>General Terms.</h6>
                    <ol class="bullet_list2">
                        <li>
                            Severability. If any provision of this Agreement is found by a court of competent
                            jurisdiction or arbitrator to be illegal, void, or unenforceable, the unenforceable
                            provision will be modified so as to render it enforceable and effective to the
                            maximum extent possible in order to effect the intention of the provision.
                        </li>
                        <li>
                            Notices. ARIS360 Homes Corporation is located at 1900 Steward Street, Suite 600,
                            Seattle, WA 98101. You may contact the ARIS360 Homes Companies by sending
                            correspondence to that address or emailing <a
                                href="mailto:legal@arishomes.com.">legal@Aris Homes.com.</a>
                        </li>
                        <li>
                            Amendments to The Agreement. We may update the Agreement, including these Terms, at
                            any time, in our sole discretion. If we do so, we will let you know either by
                            posting the updated Agreement on the Sites or through other communications. It is
                            important that you review the Agreement, including these Terms, whenever we update
                            it or you use the Services. If you continue to use the Services after we have posted
                            an updated Agreement, you are agreeing to be bound by the updated Agreement. If you
                            do not agree to be bound by the updated Agreement, then, except as otherwise
                            provided in Section 2.13.9, you may not use the Services anymore. Because our
                            Services are evolving over time we may change or discontinue all or any part of the
                            Services, at any time and without notice, at our sole discretion.
                        </li>
                        <li>
                            No Waiver. Our failure to act with respect to a breach of this Agreement or any term
                            or condition herein by you or others does not waive our right to act with respect to
                            that breach or subsequent similar or other breaches.
                        </li>
                        <li>
                            Assignment and Delegation. You may not assign or delegate any rights or obligations
                            under this Agreement. Any purported assignment or delegation by you shall be
                            ineffective. We may freely assign or delegate all rights and obligations under this
                            Agreement, fully or partially, without notice to you. We may also substitute, by way
                            of unilateral novation, effective upon notice to you, a Company for any third party
                            that assumes our rights and obligations under this Agreement.
                        </li>
                        <li>
                            Alpha and Beta Testing. The Services include any alpha or beta testing or other
                            evaluation or use of products and services, features, functionality, and all
                            components thereof (whether in final or pre-release form) that we may conduct
                            <strong>("Testing")</strong>. Except to the extent otherwise provided in another
                            agreement between
                            you and the applicable ARIS360 Homes Company, your participation in any Testing and use
                            of any data, content, information, or other materials in connection with such
                            Testing shall be subject to this Agreement.
                        </li>
                        <li>
                            International Matters. Unless otherwise stated in the applicable Services Addendum,
                            each ARIS360 Homes Company is controlled and operated from United States offices. We
                            make no representation that the Services are appropriate or available for use in any
                            particular country or location. If you choose to access, view, or use the Services,
                            you do so on your own initiative and you are responsible for compliance with local
                            laws, if and to the extent local laws are applicable. No Services, including
                            software, may be downloaded or otherwise exported or re-exported in violation of any
                            applicable law, rule, regulation, or export or import control.
                        </li>
                        <li>
                            Governing Law.Except as otherwise provided in Section 2.13.9, you hereby accept and
                            submit to the personal jurisdiction of the applicable courts in accordance with this
                            Section 2.13.8 with respect to any legal actions, suits or proceedings, and waive
                            any jurisdictional or venue defenses otherwise available. The International Sale of
                            Goods Act (British Columbia) and the United Nations Convention on Contracts for the
                            International Sale of Goods, will not apply in any way to this Agreement or to the
                            transactions contemplated by this Agreement.

                            <ol class="bullet_list">
                                <li>
                                    For Users Who Are Residents of the United States.This Agreement, any related
                                    matters, and any Claims arising under or related thereto (whether for breach
                                    of contract, tortious conduct or otherwise) will be governed by the Federal
                                    Arbitration Act, federal arbitration law, and the laws of the State of
                                    Washington, without reference to its conflicts of law principles. The
                                    exclusive jurisdiction for all Claims that you and the ARIS360 Homes Companies
                                    are not required to arbitrate will be the state and federal courts of King
                                    County, Washington.
                                </li>
                                <li>
                                    For Users Who Are Residents of Canada. This Agreement, any related matters,
                                    and any Claims arising under or related thereto (whether for breach of
                                    contract, tortious conduct or otherwise) will be governed by the laws of the
                                    Province of British Columbia and the laws of Canada applicable therein,
                                    without reference to its conflicts of law principles. The exclusive
                                    jurisdiction for all such Claims will be the courts of the City of Vancouver
                                    in the Province of British Columbia.
                                </li>
                            </ol>
                        </li>
                        <li>
                            Dispute Resolution. <strong> THIS SECTION 2.13.9 APPLIES TO THE FULLEST EXTENT
                                PERMITTED BY APPLICABLE LAW, AND IS VOID WHERE PROHIBITED BY LAW. </strong>
                            This arbitration provision shall survive termination of the Agreement.
                            <ol class="bullet_list">
                                <li>
                                    Informal Negotiations**.** To expedite resolution and reduce the cost of a
                                    Claim, you and the applicable ARIS360 Homes Company agree to first attempt to
                                    negotiate any Claim (except those Claims expressly excluded below)
                                    informally for at least thirty (30) days before initiating any arbitration
                                    or court proceeding. Such informal negotiations will commence upon written
                                    notice. Your address for such notices is your personal home address, if
                                    provided by you, with an email copy to the email address you may have
                                    provided to such ARIS360 Homes Company. If necessary to preserve a Claim under
                                    any applicable statute of limitations, you or the applicable ARIS360 Homes
                                    Company may initiate arbitration while engaging in the informal
                                    negotiations.
                                </li>
                                <li>
                                    <p>
                                        Binding Arbitration and Class Action Waiver**. <strong>Subject to
                                            Section you and the ARIS360 Homes Companies agree that any Claim
                                            between
                                            you and any
                                            ARIS360 Homes Company or ARIS360 Homes Companies will be resolved</strong>
                                        solely by binding, individual arbitration and not in a class,
                                        representative
                                        or consolidated action or proceeding.** This Section 2.13.9 is governed,
                                        in
                                        all respects, both procedurally and substantively, by the United States
                                        Federal Arbitration Act. You and the applicable ARIS360 Homes Companies
                                        agree
                                        that you are each waiving the right to a trial by jury or to participate
                                        in
                                        a class action.
                                    </p>

                                    <p>
                                        YOU AND EACH ARIS360 HOMES COMPANY AGREE THAT EACH MAY BRING CLAIMS AGAINST
                                        THE
                                        OTHER ONLY IN YOUR OR ITS INDIVIDUAL CAPACITY, AND NOT AS A PLAINTIFF OR
                                        CLASS MEMBER IN ANY PURPORTED CLASS OR REPRESENTATIVE PROCEEDING.
                                        Further,
                                        if the parties' Claim is resolved through arbitration, the arbitrator
                                        may
                                        not consolidate another person's claims with your claims, and may not
                                        otherwise preside over any form of a representative or class proceeding
                                        (the
                                        two foregoing sentences shall constitute the <strong>"Class Action
                                            Waiver"</strong>. If this
                                        Class Action Waiver is found to be unenforceable, then the entirety of
                                        this
                                        Section 2.13.9 shall be null and void.
                                    </p>

                                    <p>
                                        SUBJECT TO THE ABOVE THE PARTIES HEREBY WAIVE ANY RIGHTS THEY MAY HAVE
                                        TO TRIAL BY JURY IN REGARD TO CLAIMS COVERED BY THIS AGREEMENT.
                                    </p>

                                    <p>
                                        If any other provision of this Section 2.13.9 requiring that Claims be
                                        brought only on an individual basis and not on a class, collective, or
                                        representative basis, is determined to be invalid or unenforceable with
                                        respect to any particular Claim, then that Claim shall not proceed in
                                        arbitration but rather will be resolved in a court of competent
                                        jurisdiction subject to Section 2.13.8. If that happens, however, the
                                        arbitration provisions in this Section 2.13.9 will still be fully
                                        enforceable as to all other Claims, which must be resolved in
                                        arbitration on an individual basis. Any arbitrable Claims will be
                                        resolved before non-arbitrable Claims, which the parties will jointly
                                        request to be stayed pending the conclusion of arbitration.
                                    </p>

                                </li>
                                <li>
                                    <p>
                                        Exceptions and Opt-Out. Nothing in this Section 2.13.9 precludes any
                                        party from filing or participating in administrative proceedings before
                                        state, provincial/territorial, or federal agencies to address alleged
                                        violations of law enforced by those agencies. Further, to the extent a
                                        party would have to file a timely administrative charge or complaint as
                                        a prerequisite to filing a Claim in court, the party must do the same
                                        before submitting a Claim to arbitration under this Agreement. Upon
                                        receipt of a right-to-sue letter or similar administrative
                                        determination, however, the Claim can only be resolved in individual
                                        arbitration pursuant to the terms of this Agreement.
                                    </p>
                                    <p>
                                        This Section 2.13.9 also does not prevent any party from applying to a
                                        court of competent jurisdiction for any interim or provisional relief
                                        available under the law that is necessary to protect the rights of that
                                        party, pending the establishment of the arbitral tribunal. This Section
                                        2.13.9 further does not prevent any party from filing any Claim that
                                        otherwise qualifies in small claims court on an individual basis.
                                    </p>
                                    <p>
                                        In addition, <strong>you will retain the right to opt out of arbitration
                                            entirely and litigate any Claim </strong>if you provide the ARIS360
                                        Homes Company
                                        with whom you are entering into this Agreement with written notice of
                                        your desire to do soby email at <a
                                            href="mailto:legal@arishomes.com">legal@Aris Homes.com</a> or by
                                        regular mail
                                        at1099 Stewart Street, Suite 600, Seattle, WA 98101, within thirty (30)
                                        days following the date you first agree to this Agreement.
                                    </p>
                                </li>
                                <li>
                                    Equitable Remedies**.** Except for individual Claims brought in small claims
                                    court, the arbitrator shall determine all issues of liability on the merits
                                    of any Claim asserted by you or the ARIS360 Homes Companies, and may award
                                    declaratory or injunctive relief only in favor of the individual party
                                    seeking relief and only to the extent necessary to provide relief warranted
                                    by that party's individual Claim. To the extent that you or the ARIS360 Homes
                                    Companies prevail on a Claim in arbitration and seek injunctive relief that
                                    has the primary purpose and effect of prohibiting unlawful acts that
                                    threaten future injury to the general public, the entitlement and extent of
                                    such relief must be litigated in a civil court of competent jurisdiction,
                                    subject to Section 2.13.8 and not in arbitration. The parties agree that
                                    litigation of any issues of public injunctive relief shall be stayed pending
                                    the outcome of the merits of any individual Claims in arbitration.
                                </li>
                                <li>
                                    <p>
                                        Rules and Logistics Governing Arbitration. The arbitration will be
                                        conducted by the AAA under its AAA Rules then in effect, except as
                                        modified by these Terms. The AAA Rules are available at <a
                                            href="http://www.adr.org/" target="_blank">www.adr.org</a> or
                                        by calling 1-800-778-7879. A party who wishes to start arbitration must
                                        submit a written Demand for Arbitration to AAA and give notice to the
                                        other party as specified in the AAA Rules. The AAA provides a form
                                        Demand for Arbitration at <a
                                            href="http://www.adr.org/aaa/ShowPDF?doc=ADRSTG_004175"
                                            target="_blank">www.adr.org.</a>
                                    </p>
                                    <p>
                                        If your claim is for U.S. $10,000 or less, you may choose whether the
                                        arbitration will be conducted solely on the basis of documents submitted
                                        to the arbitrator, through a telephonic or video-conference hearing, or
                                        by an in-person hearing as established by the AAA Rules. If your claim
                                        exceeds U.S. $10,000, the right to a hearing will be determined by the
                                        AAA Rules. Any arbitration hearings will take place in the county (or
                                        parish) where you live, unless we both agree to a different location.
                                        The parties agree that the arbitrator shall have exclusive authority to
                                        decide all issues relating to the interpretation, applicability,
                                        enforceability and scope of this arbitration agreement.
                                    </p>
                                </li>
                                <li>
                                    Arbitration Costs. Payment of all filing, administration and arbitrator fees
                                    will be governed by the AAA Rules. The applicable ARIS360 Homes Company will
                                    pay for all filing, administration and arbitrator fees and expenses if your
                                    Claim is for less than $10,000, unless the arbitrator finds your Claim
                                    frivolous. If a ARIS360 Homes Company prevails in arbitration, such ARIS360 Homes
                                    Company will pay all of its own attorneys' fees and costs and will not seek
                                    to recover them from you. If you prevail in arbitration you will be entitled
                                    to an award of attorneys' fees and expenses to the extent provided under
                                    applicable law.
                                </li>
                                <li>
                                    Delivery of Demand for Arbitration.A demand for arbitration must be in
                                    writing and delivered by hand or first-class mail to the other party within
                                    the applicable statute of limitations period. Any demand for arbitration
                                    shall be provided to the applicable ARIS360 Homes Company pursuant to Section
                                    2.13.2. Any demand for arbitration made by a ARIS360 Homes Company shall be
                                    provided to the last address on file with the ARIS360 Homes Company. The
                                    arbitrator shall resolve all disputes regarding the timeliness or propriety
                                    of the demand for arbitration.
                                </li>
                                <li>
                                    Effect of Changes on Arbitration. Notwithstanding Section 2.13.3 above, if
                                    we change any of the terms of this Section 2.13.9 after the date you first
                                    accepted these Terms (or accepted any subsequent changes to these Terms),
                                    you may reject any such change by sending us written notice (including by
                                    email to <a href="mailto:legal@arishomes.com">legal@Aris Homes.com</a>
                                    within thirty (30) days of the date such
                                    change became effective, as indicated in the "Last Updated" date above or in
                                    the date of our email to you notifying you of such change. By rejecting any
                                    change, you are agreeing that you will arbitrate any Claim between you and a
                                    ARIS360 Homes Company in accordance with the terms of this Section 2.13.9 as of
                                    the date you first accepted these Terms (or accepted any subsequent changes
                                    to these Terms).
                                </li>
                                <li>
                                    No Injunctive Relief. In no event shall you seek or be entitled to
                                    rescission, injunctive or other equitable relief, or to enjoin or restrain
                                    the operation of the Services.
                                </li>
                                <li>
                                    Entire Agreement. You agree that this Agreement constitutes the entire,
                                    complete, and exclusive agreement between you and each Company regarding the
                                    Services and supersedes all prior agreements and understandings, whether
                                    written or oral, or whether established by custom, practice, policy or
                                    precedent, with respect to the subject matter of this Agreement. You also
                                    may be subject to additional terms and conditions that may apply when you
                                    use or receive certain Services, which are reflected in the applicable
                                    Services Addendum or otherwise communicated to you by the applicable ARIS360
                                    Homes Company.
                                </li>
                            </ol>
                        </li>

                    </ol>
                </li>

            </ol>
        </li>
    </ol>



    <h2>ARIS360 HOMES COMPANIES</h2>

    <h3>COPYRIGHT POLICY</h3>

    <p>
        <strong>Notification of Copyright Infringement:</strong>
    </p>

    <p>
        The ARIS360 Homes Companies, as such term is defined in the Terms of Use, <strong>("ARIS360 Homes")</strong>
        respects the
        intellectual property rights of others and expects its users to do the same.
    </p>

    <p>
        It is ARIS360 Homes's policy, in appropriate circumstances and at its discretion, to disable and/or
        terminate the accounts of users who repeatedly infringe or are repeatedly charged with infringing the
        copyrights or other intellectual property rights of others.
    </p>

    <p>
        In accordance with the Digital Millennium Copyright Act of 1998, the text of which may be found on the
        U.S. Copyright Office website at <a href="https://www.copyright.gov/legislation/dmca.pdf"
            target="_blank">https://www.copyright.gov/legislation/dmca.pdf</a> , ARIS360 Homes will respond
        expeditiously to claims of copyright infringement committed using the ARIS360 Homes Companies' websites and
        mobile applications (the "Sites") that are reported to ARIS360 Homes's Designated Copyright Agent,
        identified in the sample notice below.
    </p>

    <p>
        If you are a copyright owner, or are authorized to act on behalf of one, or authorized to act under any
        exclusive right under copyright, please report alleged copyright infringements taking place on or
        through the Sites by completing the following DMCA Notice of Alleged Infringement and delivering it to
        ARIS360 Homes's Designated Copyright Agent. Upon receipt of the Notice as described below, ARIS360 Homeswill
        take whatever action, in its sole discretion, it deems appropriate, including removal of the challenged
        material from the Sites.
    </p>




    <h2>DMCA Notice of Alleged Infringement ("Notice") </h2>

    <ol class="number_list">
        <li>
            Identify the copyrighted work that you claim has been infringed, or - if multiple copyrighted works
            are covered by this Notice - you may provide a representative list of the copyrighted works that you
            claim have been infringed.
        </li>
        <li>
            Identify the material that you claim is infringing (or to be the subject of infringing activity) and
            that is to be removed or access to which is to be disabled, and information reasonably sufficient to
            permit us to locate the material, including at a minimum, if applicable, the URL of the link shown
            on the Site(s) where such material may be found.
        </li>
        <li>
            Provide your mailing address, telephone number, and, if available, email address.
        </li>
        <li>
            Include both of the following statements in the body of the Notice:
            <ul class="bullet_list2">
                <li>
                    "I hereby state that I have a good faith belief that the disputed use of the copyrighted
                    material is not authorized by the copyright owner, its agent, or the law (e.g., as a fair
                    use)."
                </li>
                <li>
                    "I hereby state that the information in this Notice is accurate and, under penalty of
                    perjury, that I am the owner, or authorized to act on behalf of the owner, of the copyright
                    or of an exclusive right under the copyright that is allegedly infringed."
                </li>
            </ul>
        </li>
        <li>
            Provide your full legal name and your electronic or physical signature.
        </li>
    </ol>

    <p>
        Deliver this Notice, with all items completed, to ARIS360 Homes's Designated Copyright Agent:
    </p>

    <p>Copyright Agent</p>

    <p>ARIS360 Homes Legal Department</p>

    <p>1099 Stewart St, Suite 600</p>

    <p>Seattle, WA 98101</p>

    <p>Email: <a href="mailto:legal@arishomes.com">legal@Aris Homes.com</a></p>

    <p>1 (877) 973-3346 </p>





    <h2>ADDENDUM: ARIS360 HOMES SERVICES</h2>

    <p>
        Welcome! This ARIS360 Homes Services Addendum ("ARIS360 Homes Services Addendum") is hereby incorporated into
        and is a part of the overall Agreement between you and the ARIS360 Homes Companies. The terms of this ARIS360
        Homes Services Addendum supplement the terms of the Agreement with respect to the ARIS360 Homes Services
        (defined below) and in the event any term of this ARIS360 Homes Services Addendum directly conflicts with a
        term of the Agreement, the term contained in this ARIS360 Homes Services Addendum will control.
    </p>

    <p>
        The ARIS360 Homes Services are offered by ARIS360 Homes and by accessing, downloading, or using any portion of
        the ARIS360 Homes Services, you signify that you accept the terms of this ARIS360 Homes Services Addendum as
        between you and ARIS360 Homes.
    </p>

    <ol class="number_list">
        <li>
            <h5>DEFINITIONS</h5>
            <ul class="roman_list">
                <li>
                    <strong>"Agent"</strong> means a licensed real estate agent in the jurisdiction in which the
                    agent is performing services.
                </li>
                <li>
                    <strong>"MLS®"</strong> means multiple listing service.
                </li>
                <li>
                    <strong>"ARIS360 Homes"</strong> means, if you are located in the United States, ARIS360 Homes
                    Corporation, or, if you are located in Canada, ARIS360 Homes Unlimited Liability Company.
                </li>
                <li>
                    <strong>"ARIS360 Homes Agent"</strong> means an Agent employed or otherwise acting directly on
                    behalf of ARIS360 Homes pursuant to a written agreement between ARIS360 Homes and the Agent. For
                    clarification, ARIS360 Homes Agents do not include Agents participating in the ARIS360 Homes
                    Partner Program.
                </li>
                <li>
                    <strong>"ARIS360 Homes Client"</strong> means a person who has entered into an agreement with a
                    ARIS360 Homes Agent for the purpose of listing, selling, or buying a property in connection
                    with the ARIS360 Homes Services.
                </li>
                <li>
                    <strong>"ARIS360 Homes Partner Program"</strong> means the partner program offered by ARIS360
                    Homes for Agents who are not ARIS360 Homes Agents.
                </li>
                <li>
                    <strong>"ARIS360 Homes Services"</strong> means the ARIS360 Homes Sites and the services provided
                    by or for ARIS360 Homes through the ARIS360 Homes Sites that are not otherwise covered by the ARIS360
                    Homes Agent Agreements.
                </li>
                <li>
                    <strong>"ARIS360 Homes Sites"</strong> means ARIS360 Homes.com, ARIS360 Homes.ca, and other websites
                    and mobile
                    applications through which ARIS360 Homes may offer services. All other capitalized terms will
                    have the meaning as provided elsewhere in this ARIS360 Homes Services Addendum or in the
                    Agreement.
                </li>
            </ul>
        </li>
        <li>
            <h5>ARIS360 HOMES SERVICES TERMS</h5>
            <ul class="roman_list">
                <li>
                    <strong>
                        You are required to enter into a separate listing or buyer agreement to become a ARIS360
                        Homes Client and list your home or buy a home using the services of a ARIS360 Homes Agent
                        (the "ARIS360 Homes Agent Agreements"). The ARIS360 Homes Agent Agreements are not covered
                        here or by the Agreement.
                    </strong>
                </li>
                <li>
                    Who May Use the ARIS360 Homes Services. To use the ARIS360 Homes Services, you must be a resident
                    of the United States or Canada.
                </li>
                <li>
                    Permissible Use of the ARIS360 Homes Services. Except as otherwise permitted under the ARIS360
                    Homes Partner Program, you acknowledge and agree that you are a homeowner or that you are an
                    Agent acting directly on behalf of a homeowner. You agree to use the ARIS360 Homes Services
                    only for residential real estate transactions and not for commercial real estate
                    transactions of any kind. You agree that any listing information you post is about your or
                    your client's home. You will not assert ownership rights of any kind in any listing
                    information not provided by you.
                </li>
                <li>
                    Provision of Services. To access certain features and tools offered by ARIS360 Homes or its
                    service providers in connection with the ARIS360 Homes Services, you may need to register with
                    ARIS360 Homes or its service providers. You agree to provide accurate, true, current, and
                    complete information to ARIS360 Homes. The personal information you provide in connection with
                    the ARIS360 Homes Services will be protected as described in our <a
                        href="{{url('homes-privacy-notice')}}" target="_blank">Privacy Notice</a>.
                    You are
                    responsible for all activities related to the ARIS360 Homes Services that occur through your
                    account and password. You agree to keep your password confidential, not use others'
                    accounts, nor permit others to use your account. We reserve the right to terminate accounts
                    in our sole discretion.
                </li>
                <li>
                    Submitting Content to ARIS360 Homes Services.
                    <ul class="bullet_list2">
                        <li>
                            Permissible Submissions. You may submit Your Content (including those reviews
                            described in Section 2.5.8 below) in accordance with this Agreement, including,
                            without limitation, the Listing Submission Guidelines (see Section 2.5.3) and the
                            Community Guidelines (see Section 2.5.4) in this ARIS360 Homes Services Addendum.
                        </li>
                        <li>
                            Representations. You represent and warrant that (i) Your Content is original to you
                            and does not infringe, misappropriate, or otherwise violate the rights, including
                            any intellectual property rights or rights of publicity or privacy, of any person;
                            (ii) Your Content does not contain any obscene, libelous, defamatory, abusive, or
                            inappropriate content; and (iii) ARIS360 Homes's use of Your Content you provide will
                            not infringe, misappropriate, or otherwise violate the rights, including any
                            intellectual property rights or rights of publicity or privacy, of any person. You
                            are solely responsible for Your Content.
                        </li>
                        <li>
                            <h6>Listing Submission Guidelines.</h6>
                            <ul class="bullet_list">
                                <li>
                                    Listings may only be posted to, or updated on, the ARIS360 Homes Services by
                                    the owner of the listed property (e.g., a For Sale by Owner listing) or by
                                    the contracted, exclusive listing Agent for such listing. ARIS360 Homes may
                                    require that you provide proof you are the owner of the subject property, or
                                    that you have an exclusive right to post or advertise the listing (e.g., by
                                    requiring a copy of the listing agreement). If ARIS360 Homes is unable to
                                    verify that you are the homeowner or are the contracted, exclusive listing
                                    Agent, ARIS360 Homes may remove the listing at any time in its sole discretion.
                                </li>
                                <li>
                                    If you are an Agent providing a listing to or through the ARIS360 Homes
                                    Services, you hereby acknowledge and agree that:
                                    <ol class="upper_alpha_list">
                                        <li>
                                            the owner of the home that is the subject of your listing has
                                            provided his/her consent and authorized you to post the listing to
                                            the ARIS360 Homes Services and doing so does not violate any term of
                                            your agreement with, or legal duties owed to, the owner of the home;
                                        </li>
                                        <li>
                                            your broker has authorized you to post the listing to the ARIS360 Homes
                                            Services and doing so does not violate any term of your agreement
                                            with, or legal duties owed to, your broker;
                                        </li>
                                        <li>
                                            you have complied with all relevant laws, regulations, and policies,
                                            including those overseen or enforced by the applicable real estate
                                            licensing regulatory authorities, the applicable MLS® and any
                                            applicable realtor's association, including as applicable the
                                            ASSOCIATION OF REALTORS©;
                                        </li>
                                        <li>
                                            you are only submitting information that you know to be true and
                                            accurate, and you will update or remove your listing submitted to
                                            the ARIS360 Homes Services immediately if you become aware that
                                            information included therein is or becomes untrue or inaccurate.
                                        </li>
                                    </ol>
                                </li>
                            </ul>
                        </li>
                        <li>
                            Community Guidelines. All of Your Content, including listing submissions, must
                            comply with this Agreement, including these Community Guidelines, all as may be
                            interpreted by ARIS360 Homes in its sole discretion. You hereby acknowledge and agree
                            to comply with the following Community Guidelines:
                            <ul class="bullet_list">
                                <li>
                                    <strong>Be respectful.</strong> We welcome debate, but we will not tolerate
                                    personal attacks
                                    or defamatory statements about other users, clients, customers or agents.
                                    Please avoid controversial topics such as politics, race, religion, and
                                    sexuality.
                                </li>
                                <li>
                                    <strong>Be honest.</strong> Only post information that you know is true and
                                    accurate.
                                    Similarly, do not misrepresent your identity or your affiliation with
                                    another person or entity. If you submit a review, your review must reflect
                                    your true and honest opinion of and experience with the provider, product,
                                    or service you review, and you must disclose any incentive you received for
                                    providing your review (e.g., if you received any discount for providing the
                                    review or you are connected (e.g., through employment or familial
                                    relationship) to the subject of the review).
                                </li>
                                <li>
                                    <strong>Submit only what you have a right to submit.</strong> Do not submit
                                    or post any content that violates any applicable law or that infringes
                                    copyright or other intellectual property rights, including in the photos and
                                    written content that you submit. Do not submit information about real estate
                                    properties you do not own, unless you are authorized to do so as the
                                    contracted, exclusive listing Agent for that property.
                                </li>
                                <li>
                                    <strong>Respect privacy and confidentiality.</strong> Do not publicly post
                                    the personal or private information of others or other peoples' contact
                                    information. This also includes communications from community administrators
                                    and moderators. In general, do not publicly disclose any confidential or
                                    sensitive information.
                                </li>
                                <li>
                                    <strong>No solicitation.</strong> Real estate agents, brokers, salespersons,
                                    and other professionals are welcome on the ARIS360 Homes Sites, but not to
                                    promote their services. You can include information about your brokerage
                                    business in Your Content, but you cannot include your brokerage business's
                                    general contact information or website addresses. Do not embed any marketing
                                    information in listing photos or videos, including an agent's name, company
                                    or brokerage name, logo, phone number, or email address. (Where available,
                                    ARIS360 Homes will display the name, photo, license number, brokerage name,
                                    phone number, and/or email address of listing Agents who submit listings to
                                    the Services).
                                </li>
                                <li>
                                    <strong>No spamming.</strong> Do not post advertising, junk mail, spam,
                                    scams, or chain letters.
                                </li>
                                <li>
                                    <strong>No illegal or offensive posts.</strong> Do not submit or post
                                    anything that contains abusive, threatening, illegal, inflammatory,
                                    libelous, obscene, or pornographic content.
                                </li>
                                <li>
                                    <strong>No discrimination.</strong> Do not post any content that expresses a
                                    discriminatory preference, even implicitly.
                                </li>
                                <li>
                                    <strong>Individuals.</strong> Do not post any information that identifies
                                    any individual person whether such person is a property-owner or otherwise,
                                    or any information that could be used to identify any individual person,
                                    except for any Agent, salesperson, or broker associate with the applicable
                                    property.
                                </li>
                            </ul>
                        </li>

                        <li>
                            MLS®s Not Responsible for Submissions. The MLS®s are not responsible or liable,
                            directly or indirectly, in any way, for any loss or damage of any kind incurred as a
                            result of, or in connection with, your or any other user's use of or reliance on any
                            listing information, any related data, or posted or hyperlinked comments or reviews
                            on the ARIS360 Homes Sites.
                        </li>

                        <li>
                            MLS®s Do Not Endorse Submissions. The MLS®s do not endorse any posted or hyperlinked
                            comments or reviews on the ARIS360 Homes Sites.
                        </li>

                        <li>
                            ARIS360 Homes's License to Use Your Content**.** You hereby grant to ARIS360 Homes a
                            license in Your Content pursuant to the Terms of Use of this Agreement.
                        </li>

                        <li>
                            Open Book**.** We may publish local reviews of real estate service providers by ARIS360
                            Homes Clients (title companies, escrow companies, lenders, home inspectors, lawyers,
                            and others) in our 'Open Book' section of the ARIS360 Homes Services or another portion
                            of the ARIS360 Homes Services. We publish the reviews, even if they are not good. If we
                            have an email address for the provider, we may, at our discretion, let them know
                            that they have been reviewed and allow them to respond. Real estate service
                            providers or ARIS360 Homes Clients who have questions can contact <a
                                href="mailto:openbook@arishomes.com">openbook@ArisHomes.com</a>.
                        </li>
                    </ul>
                </li>

                <li>
                    Partner Agent Program. ARIS360 Homes is not responsible for the work performed or the services
                    provided by Agents in connection with the Partner Agent Program.
                </li>

                <li>
                    Equal Housing Opportunity. ARIS360 Homes is pledged to the letter and spirit of United States
                    and Canadian policy for the achievement of equal housing opportunity throughout the areas in
                    which we offer ARIS360 Homes Services and to compliance with all applicable human rights
                    legislation. We encourage and support an affirmative advertising and marketing program in
                    which there are no barriers to obtaining housing because of race, color, religion, sex,
                    sexual orientation, gender identity or expression, handicap, familial status, national
                    origin, or other legally protected group.
                </li>

                <li>
                    <h6>ARIS360 Homes Services Content.</h6>
                    <ul class="bullet_list2">
                        <li>
                            Neighborhood Location Outlines. Any neighborhood outlines that appear on the ARIS360
                            Homes Sites or ARIS360 Homes Services have been supplied by Maponics LLC.
                        </li>
                        <li>
                            School Ratings and Reviews. Where available, GreatSchools ratings are provided by
                            GreatSchools.net.
                        </li>
                    </ul>
                </li>

                <li>
                    <p>
                        MLS® Terms of Use. Before we can show you pictures and prices of sold homes, or show you
                        comments on active listings from ARIS360 Homes Agents, our MLS® data providers require you
                        to
                        acknowledge that you consider ARIS360 Homes to be your real estate agent, broker or
                        salesperson. For purposes of clarification, you have no obligation to work with a ARIS360
                        Homes
                        Agent to buy or sell a home. You can always choose to work with us or not. Before
                        proceeding
                        to view the content made available through the ARIS360 Homes Services, you must acknowledge
                        all
                        of the following:
                    </p>

                    <ul class="bullet_list2">
                        <li>
                            You are entering into a lawful consumer-broker, seller/buyer-brokerage, or similar
                            relationship with ARIS360 Homes (as defined by applicable state or
                            provincial/territorial law). You have no obligation to work with ARIS360 Homes and you
                            can terminate your account with ARIS360 Homes at any time. Any information you obtain
                            from the ARIS360 Homes website is intended for your personal, non-commercial use.
                        </li>
                        <li>
                            You have a bona fide interest in the purchase, sale, or lease of real estate on the
                            ARIS360 Homes Sites.
                        </li>
                        <li>
                            You will not copy, redistribute, or retransmit any of the information provided
                            except in connection with your consideration of the purchase or sale of an
                            individual property.
                        </li>
                        <li>
                            You will not, directly or indirectly, display, post, disseminate, distribute,
                            publish, broadcast, transfer, sell, or sublicense, any information provided through
                            the Services to another individual or entity. This prohibition expressly includes
                            "scraping" (including screen and database scraping), "data mining", or any other
                            activity intended to collect, store, re-organize, summarize, or manipulate any
                            information provided or any related data.
                        </li>
                        <li>
                            You acknowledge that the individual MLS® that supplies the listing data is the owner
                            of such data and you acknowledge the validity of the MLS®'s system, and MLS®'s
                            proprietary rights and copyright to such data and any related data.
                        </li>
                        <li>
                            ARIS360 Homes also explicitly authorizes MLS® employees, MLS® members, or their duly
                            authorized representatives to access ARIS360 Homes's website for the purposes of
                            verifying compliance with MLS® rules and monitoring the display of participants'
                            listings on ARIS360 Homes's site.
                        </li>
                        <li>
                            <strong>
                                ARIS360 Homes makes no guarantees as to the reliability, accuracy, or up to date
                                nature of any information from MLS® sources.
                            </strong>
                        </li>
                        <li>
                            Additional disclosures apply to residents of
                            <a href="#">Colorado</a>,
                            <a href="#" >Kansas</a>,
                            <a href="#" >Missouri</a>,
                            <a href="#" >New York</a>,
                            <a href="#" >North Carolina</a>,
                            <a href="#" >Rhode Island</a>,
                            <a href="#" >South Carolina</a> and
                            <a href="#" >Texas.</a>
                        </li>

                    </ul>

                </li>

                <li>
                    Location-Specific Agreements and Disclaimers for MLS®s and other Data Providers. ARIS360 Homes
                    receives the home listing information from many listing sources. The following disclaimers
                    apply to listings only from that particular data source. To the extent there are defined
                    terms in the disclaimers below, such definitions shall only apply to the use of those terms
                    in such particular disclaimer.
                </li>

            </ul>
        </li>
    </ol>


    <h2>Sedona-Verde Valley Association of Realtors (SVVAR)</h2>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image1.png')}}" alt="" />
    <p>
        Listing information provided in part by the svvar for personal, non-commercial use by viewers of this
        site and may not be reproduced or redistributed. All information is deemed reliable but not guaranteed.
        Copyright © svvar 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>


    <h2>Alamance MLS</h2>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image2.png')}}" alt="" />
    <p>
        The listing content relating to real estate for sale on this web site comes in part from the IDX Program
        of Alaska Multiple Listing Service, Inc. (AKMLS). Real estate listings held by brokerage firms other
        than ARIS360 Homes are marked with either the listing brokerage's logo or the AKMLS logo and information
        about them includes the name of the listing brokerage. All information is deemed reliable but is not
        guaranteed and should be independently verified for accuracy. ARIS360 Homes does not display the entire
        AKMLS IDX Listing Content Database on this web site. The listings of some real estate brokerages have
        been excluded. Copyright 2022 Alaska Multiple Listing Service Inc.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>


    <h2>Allegheny Highland Association of Realtors (AHARMLS)</h2>
    <p>
        Listing information provided in part by the Allegheny Highland Association of Realtors MLS for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Allegheny Highland Association of Realtors MLS 2022.
        All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>


    <h2>Allegheny Valley BOR MLS (AVBREALTORS)</h2>
    <p>
        Listing information provided in part by the Allegheny Valley Board of Realtors MLS for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Allegheny Valley Board of Realtors MLS 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM</p>


    <h2>Amarillo Association of Realtors MLS</h2>
    <p>
        Listing information provided in part by the Amarillo Association of Realtors MLS for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Amarillo Association of Realtors MLS 2022. All rights
        reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>


    <h2>Amelia Island-Nassau County Assoc of Realtors Inc</h2>
    <p>IDX information is provided exclusively for personal, non-commercial use, and may not be used for any
        purpose other than to identify prospective properties consumers may be interested in purchasing.
        Information is deemed reliable but not guaranteed. The listing broker’s offer of compensation is made
        only to participants of the MLS where the listing is filed.</p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>


    <h2>Ann Arbor MLS</h2>
    <p>
        The information is being provided by Ann Arbor Area Board of REALTORS®. Information deemed reliable but
        not guaranteed. Information is provided for consumers' personal, non-commercial use, and may not be used
        for any purpose other than the identification of potential properties for purchase. © 2022 Ann Arbor
        Area Board of REALTORS®. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>


    <h2>Antelope Valley MLS</h2>
    <p>
        The information is being provided by Greater Antelope Valley Association of Realtors MLS. Information
        deemed reliable but not guaranteed. Information is provided for consumers' personal, non-commercial use,
        and may not be used for any purpose other than the identification of potential properties for purchase.
        Copyright 2022 Greater Antelope Valley Association of Realtors MLS. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>


    <h2>Arizona Regional Multiple Listing Service, Inc. (ARMLS)</h2>
    <p>
        <img src="{{asset('public/assets/images/homes_terms_of_use/image3.png')}}" style="display: inline-flex;" alt="" />
        Indicates a property listed by a real estate brokerage other than the web site owner. Information Deemed
        Reliable But Not Guaranteed. All information should be verified by the recipient and none is guaranteed
        as accurate by ARMLS. Copyright 2022 Arizona Regional Multiple Listing Service, Inc. All rights
        reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h2>Ashland Area Board of Realtors MLS</h2>
    <p>
        Listing information provided in part by the Ashland Area Board of Realtors MLS for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Ashland Area Board of Realtors 2022. All rights
        reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>


    <h2>Aspen Glenwood MLS</h2>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image4.png')}}" alt="" />
    <p>
        Listing information provided in part by the Aspen Glenwood MLS for personal, non-commercial use by
        viewers of this site and may not be reproduced or redistributed. All information is deemed reliable but
        not guaranteed. Copyright © Aspen Glenwood MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>


    <h2>Austin Board of Realtors (ACTRIS)</h2>
    <p>
        The information being provided by ACTRIS is for the consumer's personal, non-commercial use and may not
        be
        used for any purpose other than to identify prospective properties consumer may be interested in
        purchasing.
        Any information relating to real estate for sale referenced on this web site comes from the Internet
        Data
        Exchange (IDX) program of the ACTRIS. Real estate listings held by brokerage firms other than this site
        owner are marked with the IDX/MLS logo. Information deemed reliable but is not guaranteed accurate by
        ACTRIS.
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM</p>


    <h2>Baldwin County Association of Realtors</h2>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image5.png')}}" alt="" />
    <p>
        Listing information provided in part by the Baldwin County Association of Realtors for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Baldwin County Association of Realtors 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM</p>


    <h2>Bay Area Real Estate Information Services (BAREIS)</h2>
    <p>
        Listing information is being provided by the BAREIS Inc., MLS. IDX information is provided exclusively
        for consumers' personal, non-commercial use and may not be used for any purpose other than to identify
        prospective properties consumers may be interested in purchasing.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>


    <h2>Beaumont Board of Realtors (BBOR)</h2>
    <p>
        Listing information provided in part by the Southeast Texas MLS for personal, non-commercial use by
        viewers of this site and may not be reproduced or redistributed. All information is deemed reliable but
        not guaranteed. Copyright © Southeast Texas MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h2>Berkshire County MLS</h2>
    <p>
        Listing information provided in part by the BCMLS for personal, non-commercial use by viewers of this
        site and may not be reproduced or redistributed. All information is deemed reliable but not guaranteed.
        Copyright © BCMLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h2>Big Bear MLS</h2>
    <p>
        Based on information from the Big Bear MLS as of (date the AOR/MLS data was obtained). All data,
        including all measurements and calculations of area, is obtained from various sources and has not been,
        and will not be, verified by broker or MLS. All information should be independently reviewed and
        verified for accuracy. Properties may or may not be listed by the office/agent presenting the
        information.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>


    <h2>Black Hills Board of Realtors</h2>
    <p>
        Listing information provided in part by the Black Hills MLS for personal, non-commercial use by viewers
        of this site and may not be reproduced or redistributed. All information is deemed reliable but not
        guaranteed. Copyright © Black Hills MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h2>Bluegrass REALTORS® (LBARMLS)</h2>
    <p>
        The information is being provided by LBAR Multiple Listing Service. Information deemed reliable but not
        guaranteed. Information is provided for consumers' personal, non-commercial use, and may not be used for
        any purpose other than the identification of potential properties for purchase. Copyright 2022 LBAR
        Multiple Listing Service. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM</p>



    <h2>Bonita Springs Association of Realtors (BEARMLS)</h2>
    <p>
        The information is being provided by Southwest Florida Multiple Listing Service. Information deemed
        reliable but not guaranteed. Information is provided for consumers' personal, non-commercial use, and
        may not be used for any purpose other than the identification of potential properties for purchase.
        Copyright 2022 Southwest Florida Multiple Listing Service. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>


    <h2>Bridge MLS </h2>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image6.png')}}" alt="" />
    <p>
        Bay East ©2022. BridgeMLS ©2022, CCAR ©2022. Information Deemed Reliable But Not Guaranteed. This
        information is being provided by the Bay East MLS, BridgeMLS or CCAR MLS. The listings presented here
        may or may not be listed by the Broker/Agent operating this website. This information is intended for
        the personal use of consumers, and may not be used for any purpose other than to identify prospective
        properties consumers may be interested in purchasing.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>



    <h2>Bright MLS</h2>
    <p>
        Data provided by Bright MLS. Property information is for the users personal, non-commercial use.
        Information may not be used for any purpose other than to identify prospective properties consumers may
        be interested in purchasing. Some properties that appear on the website may no longer be for sale, and
        may be under contract or sold. ©2020 Bright MLS, All Rights Reserved. Information is reliable but not
        guaranteed.
    </p>
    <p>Last updated: Nov 30, 2022 12:07 PM </p>



    <h3>Brooklyn New York MLS</h3>
    <p>
        The information is being provided by Brooklyn MLS. Information deemed reliable but not guaranteed.
        Information is provided for consumers’ personal, non-commercial use, and may not be used for any purpose
        other than the identification of potential properties for purchase. Copyright 2022 Brooklyn MLS. All
        Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM</p>



    <h3>Cambria Somerset MLS (CSMLS) </h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image7.png')}}" alt="" />
    <p>
        Listing information provided in part by the Cambria Somerset Association of Realtors MLS for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Cambria Somerset Association of Realtors MLS 2022.
        All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>




    <h3>Canadian Real Estate Association </h3>
    <p>
        This <a href="https://www.realtor.ca/" target="_blank">REALTOR.ca</a> listing content is owned and
        licensed by REALTOR®
        members of <a href="https://www.crea.ca/" target="_blank">The Canadian Real Estate Association.</a>
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM </p>



    <h3>Canopy MLS </h3>
    <p>
        The data relating to real estate on this website derive in part from the Internet Data Exchange program.
        Brokers make an effort to deliver accurate information, but buyers should independently verify any
        information on which they will rely in a transaction. All properties are subject to prior sale, change
        or withdrawal. Neither ARIS360 Homes nor any listing broker shall be responsible for any typographical
        errors, misinformation, or misprints, and they shall be held totally harmless from any damages ARIS360ing
        from reliance upon this data. This data is provided exclusively for consumers' personal, non-commercial
        use and may not be used for any purpose other than to identify prospective properties they may be
        interested in purchasing. © 2019 Canopy MLS.
    </p>
    <p>
        The Digital Millennium Copyright Act of 1998, 17 U.S.C. § 512 (the "DMCA") provides recourse for
        copyright owners who believe that material appearing on the Internet infringes their rights under U.S.
        copyright law. If you believe in good faith that any content or material made available in connection
        with our website or services infringes your copyright, you (or your agent) may send us a notice
        requesting that the content or material be removed, or access to it blocked. Notices must be sent in
        writing by email to DMCAnotice@MLSGrid.com.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM </p>



    <h3>Cape Cod and Islands MLS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image8.png')}}" alt="" />
    <p>
        The information is being provided by Cape Cod & Islands Multiple Listing Service, Inc. Information
        deemed reliable but not guaranteed. Information is provided for consumers’ personal, non-commercial use,
        and may not be used for any purpose other than the identification of potential properties for purchase.
        © 2022 Cape Cod & Islands Multiple Listing Service, Inc. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM</p>



    <h3>Cape May County Association of Realtors (CMCMLS)</h3>
    <p>
        The information is being provided by Cape May County Association of Realtors. Information deemed
        reliable but not guaranteed. Information is provided for consumers’ personal, non-commercial use, and
        may not be used for any purpose other than the identification of potential properties for purchase.
    </p>
    <p>
        © 2022 Cape May County Association of Realtors. All Rights Reserved.
    </p>
    <p>
        Last updated: Nov 30, 2022 12:10 PM
    </p>



    <h3>Capital Area Technology & REALTOR Services</h3>
    <p>
        Listing information provided in part by the Capital Area Technology & REALTOR® Services for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Capital Area Technology & REALTOR® Services 2022. All
        rights reserved.
    </p>
    <p>
        Last updated: Nov 30, 2022 12:11 PM
    </p>



    <h3>Cedar Rapids Area Association Of Realtors</h3>
    <p>
        Listing information provided in part by the Cedar Rapids Area Association Of Realtors for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Cedar Rapids Area Association Of Realtors 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM </p>


    <h3>Central Georgia MLS (CGMLS) </h3>
    <p>
        Listing information provided in part by the Central Georgia MLS for personal, non-commercial use by
        viewers of this site and may not be reproduced or redistributed. All information is deemed reliable but
        not guaranteed. Copyright © Central Georgia MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>



    <h3>Central Hill Country MLS</h3>
    <p>
        Listing information provided in part by the Central Hill Country Board of Realtors for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Central Hill Country Board of Realtors 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>



    <h3>Central Jersey MLS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image9.png')}}" alt="" />
    <ul class="upper_alpha_list">
        <li>
            The data relating to real estate for sale on this web-site comes in part from the Internet Listing
            Display database of the CENTRAL JERSEY MULTIPLE LISTING SYSTEM,INC. Real estate listings held by
            brokerage firms other than this site-owner are marked with the ILD logo. The CENTRAL JERSEY MULTIPLE
            LISTING SYSTEM, INC does not warrant the accuracy, quality, reliability, suitability, completeness,
            usefulness or effectiveness of any information provided.
        </li>
        <li>
            The information being provided is for consumers' personal, non-commercial use and may not be used
            for any purpose other than to identify properties the consumer may be interested in purchasing or
            renting.
        </li>
        <li>
            Copyright 2022, CENTRAL JERSEY MULTIPLE LISTING SYSTEM, INC. All rights reserved. The CENTRAL JERSEY
            MULTIPLE LISTING SYSTEM, INC retains all rights, title and interest in and to its trademarks,
            service marks and copyrighted material.
        </li>
    </ul>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Central New York Information Service Inc. (CNYIS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image10.png')}}" alt="" />
    <p>
        Information is provided for consumers' personal, non-commercial use, and may not be used for any purpose
        other than the identification of potential properties for purchase. All information deemed reliable but
        not guaranteed and should be independently verified. All properties are subject to prior sale, change or
        withdrawal. Neither the listing broker(s) nor ARIS360 Homes shall be responsible for any typographical
        errors, misinformation, misprints, and shall be held totally harmless. © 2022 CNYIS. All rights reserved
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM </p>


    <h3>Central Panhandle Association or Realtors </h3>
    <p>
        Listing information provided in part by the Central Panhandle Association of REALTORS® for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © 2022 Central Panhandle Association of REALTORS®. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>


    <h3>Central Susquehanna Valley BOR MLS</h3>
    <p>
        Listing information provided in part by the Central Susquehanna Valley Board of Realtors MLS for
        personal, non-commercial use by viewers of this site and may not be reproduced or redistributed. All
        information is deemed reliable but not guaranteed. Copyright © Central Susquehanna Valley Board of
        Realtors MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM</p>



    <h3>Central Texas MLS</h3>
    <p>
        The information being provided by Central Texas MLS is provided exclusively for consumers' personal,
        non-commercial use, that it may not be used for any purpose other than to identify prospective
        properties consumers may be interested in purchasing, and that the data is deemed reliable but is not
        guaranteed accurate by Central Texas MLS.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>



    <h3>Central Virginia Regional Multiple Listing Service (CVRMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image11.png')}}" alt="" />
    <p>
        Information is provided for consumers' personal, non-commercial use, and may not be used for any purpose
        other than the identification of potential properties for purchase. All or a portion of the multiple
        Listing information is provided by the Central Virginia Regional Multiple Listing Service, LLC, from a
        copyrighted compilation of Listings. All CVR MLS information provided is deemed reliable but is not
        guaranteed accurate. The compilation of Listings and each individual Listing are Copyright 2022 Central
        Virginia Regional Multiple Listing Service, LLC. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>



    <h3>Central Wisconsin Multiple Listing Service (CWMLS)</h3>
    <p>
        The information is being provided by WIREX. Information deemed reliable but not guaranteed. Information
        is provided for consumers' personal, non-commercial use, and may not be used for any purpose other than
        the identification of potential properties for purchase. Copyright 2022 WIREX. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>



    <h3>Charleston MLS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image12.png')}}" alt="" />
    <p>
        The information is being provided by Charleston Trident MLS. Information deemed reliable but not
        guaranteed. Information is provided for consumers' personal, non-commercial use, and may not be used for
        any purpose other than the identification of potential properties for purchase. © 2022 Charleston
        Trident MLS. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM </p>



    <h3>Charlottesville AOR</h3>
    <p>
        Listing information provided in part by the Charlottesville AOR, Greater Augusta AOR, and Harrison
        Rockingham AOR for personal, non-commercial use by viewers of this site and may not be reproduced or
        redistributed. All information is deemed reliable but not guaranteed. Copyright © Charlottesville AOR,
        Greater Augusta AOR, and Harrison Rockingham AOR 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM </p>


    <h3>Cincy MLS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image13.png')}}" alt="" />
    <p>
        The data relating to real estate for sale on this web site comes in part from the Broker Reciprocity™
        program of the Multiple Listing Service of Greater Cincinnati. Real estate listings held by brokerage
        firms other than ARIS360 Homes are marked with the Broker Reciprocity™ logo (the small house as shown to
        the left) and detailed information about them includes the name of the listing brokers. Information
        deemed reliable but not guaranteed. Information is provided for consumers' personal, non-commercial use,
        and may not be used for any purpose other than the identification of potential properties for purchase.
        Copyright 2022, MLS of Greater Cincinnati, Inc. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Classic MLS, Inc. (CMLSGA)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image14.png')}}" alt="" />
    <p>
        Listing information provided in part by Classic MLS for personal, non-commercial use by viewers of this
        site and may not be reproduced or redistributed. All information is deemed reliable but not guaranteed.
        Copyright © Classic MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>



    <h3>Coastal Bend MLS</h3>
    <p>
        The information is being provided by Coastal Bend MLS. Information deemed reliable but not guaranteed.
        Information is provided for consumers' personal, non-commercial use, and may not be used for any purpose
        other than the identification of potential properties for purchase. Copyright 2022 Coastal Bend MLS. All
        Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>


    <h3>Coastal Carolinas Association of Realtors (CCAR) </h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image15.png')}}" alt="" />
    <p>
        Provided courtesy of The Coastal Carolinas Association of REALTORS®. The real estate listing information
        and related content displayed on ARIS360 Homes is provided exclusively for consumers' personal,
        non-commercial use and may not be used for any purpose other than to identify prospective properties
        consumers may be interested in purchasing. This information and related content is deemed reliable but
        is not guaranteed accurate by the Coastal Carolinas Association of Realtors MLS. Copyright 2022 of the
        Coastal Carolinas Association of REALTORS® MLS. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 07:11 AM </p>



    <h3>Coeur d'Alene MLS (CDAMLS) </h3>
    <p>
        IDX information is provided exclusively for consumers’ personal, non-commercial use, and may not be used
        for any purpose other than to identify prospective properties consumers may be interested in purchasing,
        and that the data is deemed reliable but is not guaranteed accurate by the Coeur d'Alene MLS.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Colorado Real Estate Network </h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image16.png')}}" alt="" />
    <p>
        SOURCE: The data relating to real estate for sale on this web site comes in part from the Internet Data
        Exchange (IDX) program of Colorado Real Estate Network (CREN). All data deemed reliable but not
        guaranteed and should be independently verified. The information contained in this publication is
        subject to change without notice.
    </p>
    <p>
        TERMS OF USE: This publication is designed to provide information with regard to the subject matter
        covered. This listing information is provided exclusively for consumers' personal, non-commercial use
        and may not be used for any purpose other than to identify prospective properties consumers may be
        interested in purchasing. It is displayed with the understanding that the publisher and authors are not
        engaged in rendering real estate, legal, accounting, tax, or other professional services and that the
        publisher and authors are not offering such advice in this publication. If real estate, legal, or other
        expert assistance is required, the services of a competent, professional person should be sought.
    </p>
    <p>
        WARRANTY: COLORADO REAL ESTATE NETWORK (CREN) MAKES NO WARRANTY OF ANY KIND WITH REGARD TO THIS
        MATERIAL, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A
        PARTICULAR PURPOSE. COLORADO REAL ESTATE NETWORK SHALL NOT BE LIABLE FOR ERRORS CONTAINED HEREIN OR FOR
        ANY DAMAGES IN CONNECTION WITH THE FURNISHING, PERFORMANCE, OR USE OF THIS MATERIAL.
    </p>
    <p>“© COPYRIGHT 2022 by COLORADO REAL ESTATE NETWORK” </p>
    <p>16 S CASCADE </p>
    <p>MONTROSE, CO 81401 USA </p>

    <p>
        ALL RIGHTS RESERVED WORLDWIDE. No part of this publication may be reproduced, adapted, translated,
        stored in a retrieval system or transmitted in any form or by any means, electronic, mechanical,
        photocopying, recording, or otherwise, without the prior written permission of Colorado Real Estate
        Network (CREN).
    </p>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image17.png')}}" alt="" />
    <p>
        PUBLISHER'S NOTICE: All information is deemed reliable but is not guaranteed and should be independently
        verified. All real estate advertised herein is subject to the US Federal Fair Housing Act of 1968 and
        the Colorado Fair Housing Act, which makes it illegal to make or publish any advertisement that
        indicates any preference, limitation, or discrimination based on race, color, religion, sex, handicap,
        familial status, or national origin. Please check with your local government agency for more
        information.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>



    <h3>Colorado Springs MLS (PPMLS Pikes Peak) </h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image18.png')}}" alt="" />
    <p>
        The real estate listing information and related content displayed on this site is provided exclusively
        for consumers’ personal, non-commercial use and may not be used for any purpose other than to identify
        prospective properties consumers may be interested in purchasing. Any offer of compensation is made only
        to Participants of the PPMLS. This information and related content is deemed reliable but is not
        guaranteed accurate by the Pikes Peak REALTOR® Services Corp.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM </p>



    <h3>Columbia Greene Northern Dutchess MLS, INC </h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image19.png')}}" alt="" />
    <p>
        Listing information provided in part by the Columbia Greene Northern Dutchess MLS for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Columbia Greene Northern Dutchess MLS 2022. All
        rights reserved.
    </p>



    <h3>Columbia MO MLS </h3>
    <p>
        Listing information provided in part by the Columbia Board of Realtors for personal, non-commercial use
        by viewers of this site and may not be reproduced or redistributed. All information is deemed reliable
        but not guaranteed. Copyright © Columbia Board of Realtors 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM</p>



    <h3>Columbus and Central Ohio MLS (CBRMLS) </h3>
    <p>
        The information is being provided by Columbus and Central Ohio Regional Multiple Listing Service.
        Information deemed reliable but not guaranteed. Information is provided for consumers' personal,
        non-commercial use, and may not be used for any purpose other than the identification of potential
        properties for purchase. Copyright 2022 Columbus and Central Ohio Regional Multiple Listing Service. All
        Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM</p>



    <h3>Combined LA/Westside MLS (CLAW TheMLS) </h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image20.png')}}" style="display: inline-flex;" alt="" />
    <span>
        Based on information from The MLS CLAW as of (date the MLS data was obtained). All data, including all
        measurements and calculations of area, is obtained from various sources and has not been, and will not
        be, verified by broker or MLS. All information should be independently reviewed and verified for
        accuracy. Properties may or may not be listed by the office/agent presenting the information.
    </span>

    <p>Last updated: Nov 30, 2022 12:10 PM </p>



    <h3>Conejo Simi Moorpark Association of REALTORS</h3>
    <p>Last updated: Nov 30, 2022 12:09 PM</p>



    <h3>Consolidated MLS</h3>
    <p>
        The information is being provided by Consolidated Multiple Listing Service, Inc. Information deemed
        reliable but not guaranteed. Information is provided for consumers' personal, non-commercial use, and
        may not be used for any purpose other than the identification of potential properties for purchase. ©
        2022 Consolidated Multiple Listing Service, Inc. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Cooperative Arkansas Reators (CARMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image21.png')}}" alt="" />
    <p>
        The information is being provided by Cooperative Arkansas Realtors® Multiple Listings Services, Inc..
        Information deemed reliable but not guaranteed. Information is provided for consumers' personal,
        non-commercial use, and may not be used for any purpose other than the identification of potential
        properties for purchase. Copyright 2022 Cooperative Arkansas Realtors® Multiple Listings Services, Inc.
        All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM </p>



    <h3>CRISNet MLS</h3>
    <p>
        Based on information from California Regional Multiple Listing Service, Inc. as of 2022. This
        information is for your personal, non-commercial use and may not be used for any purpose other than to
        identify prospective properties you may be interested in purchasing. Display of MLS data is usually
        deemed reliable but is NOT guaranteed accurate by the MLS. Buyers are responsible for verifying the
        accuracy of all information and should investigate the data themselves or retain appropriate
        professionals. Information from sources other than the Listing Agent may have been included in the MLS
        data. Unless otherwise specified in writing, Broker/Agent has not and will not verify any information
        obtained from other sources. The Broker/Agent providing the information contained herein may or may not
        have been the Listing and/or Selling Agent.
    </p>
    <p>Last updated: Nov 30, 2022 12:04 PM </p>



    <h3>CRMLS</h3>
    <p>
        Based on information from California Regional Multiple Listing Service, Inc. as of 2022. This
        information is for your personal, non-commercial use and may not be used for any purpose other than to
        identify prospective properties you may be interested in purchasing. Display of MLS data is usually
        deemed reliable but is NOT guaranteed accurate by the MLS. Buyers are responsible for verifying the
        accuracy of all information and should investigate the data themselves or retain appropriate
        professionals. Information from sources other than the Listing Agent may have been included in the MLS
        data. Unless otherwise specified in writing, Broker/Agent has not and will not verify any information
        obtained from other sources. The Broker/Agent providing the information contained herein may or may not
        have been the Listing and/or Selling Agent.
    </p>
    <p>Last updated: Nov 30, 2022 10:23 AM </p>



    <h3>Dayton MLS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image22.png')}}" alt="" />
    <p>
        The information is being provided by Dayton Area Board of Realtors MLS. Information deemed reliable but
        not guaranteed. Information is provided for the consumer's personal, non-commercial use, and may not be
        used for any purpose other than the identification of potential properties for purchase. Copyright 2022
        Dayton Area Board of Realtors MLS. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Daytona MLS </h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image21.png')}}" alt="" />
    <p>
        The information is being provided by Daytona Multiple Listing Service. Information deemed reliable but
        not guaranteed. Information is provided for consumers' personal, non-commercial use, and may not be used
        for any purpose other than the identification of potential properties for purchase. Copyright 2022
        Daytona Multiple Listing Service. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Del Rio Board of Realtors </h3>
    <p>
        Based on information from the Multiple Listing Service of the Del Rio Board of REALTORS®. All
        information provided is deemed reliable but is not guaranteed and should be independently verified. The
        Del Rio Board of REALTORS® provides the MLS and all content therein “AS IS” and without any warranty,
        express or implied. © 2022 Del Rio Board of REALTORS®, Inc. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>



    <h3>Des Moines Area Association of Realtors (DMAAR) </h3>
    <p>
        DMMLS information is provided exclusively for consumers' personal, non-commercial use, it may not be
        used for any purpose other than to identify prospective properties consumers may be interested in
        purchasing. The data is deemed reliable but is not guaranteed accurate by the MLS.
    </p>
    <p>Last updated: Nov 30, 2022 06:30 AM</p>



    <h3>East Alabama Board of Realtors (EABOR)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image23.png')}}" alt="" />
    <p>
        Listing information provided in part by the East Alabama Board of Realtors for personal, non-commercial
        use by viewers of this site and may not be reproduced or redistributed. All information is deemed
        reliable but not guaranteed. Copyright © East Alabama Board of Realtors 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>


    <h3>East Central Iowa AOR (ECIMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image24.png')}}" alt="" />
    <p>
        Data provided by East Central Iowa Multiple Listing Service, Inc. All information is from sources deemed
        to be accurate but is not warranted. Buyers and sellers are advised to personally verify all information
        given on this listing as some may be estimated. Neither brokers nor sellers are responsible for
        inaccuracies in this information. The listing Broker's offer of compensation is made only to
        participants of the ECIMLS.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>


    <h3>Eastern Kentucky Association of Realtors (EKAR) </h3>
    <p>
        Listing information provided in part by the Eastern Kentucky Association of Realtors for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Eastern Kentucky Association of Realtors 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>



    <h3>Elmira Corning Regional Board of Realtors MLS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image25.png')}}" alt="" />
    <p>
        The data on this website relating to real estate for sale comes in part from the IDX Program of the
        Multiple Listing Service of the Elmira-Corning Regional Association of REALTORS®, Inc. Real estate
        listings held by brokerage firms other than ARIS360 Homes Corporation are marked with the IDX logo. All
        listing broker/agent information can be found on the detail page of each listing. All information is
        believed accurate but not guaranteed. The properties displayed may not be all of the properties
        available through the IDX Program. Any use of this site other than by potential buyers or sellers is
        strictly prohibited. 2022 Elmira-Corning Regional Association of Realtors® Multiple Listing Service©
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM </p>


    <h3>Emerald Coast Association of Realtors (ECAR) </h3>
    <p>
        The MLS Listing Information displayed on the VOW is deemed reliable but is not guaranteed accurate by
        the MLS. Vendor Member Number: 29520
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>First Multiple Listing Service (FMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image26.png')}}" style="display: inline-flex;" alt="" />
    <span>
        Listings identified with the FMLS IDX logo come from FMLS and are held by brokerage firms other than the
        owner of this website and the listing brokerage is identified in any listing details. Information is
        deemed reliable but is not guaranteed. If you believe any FMLS listing contains material that infringes
        your copyrighted work, please <a href="https://www.fmls.com/dmca.htm" target="_blank">click here</a> to
        review our DMCA policy and learn how to submit a takedown
        request. © 2022 First Multiple Listing Service, Inc.
    </span>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>



    <h3>Flint Hills Association of REALTORS </h3>
    <p>
        Listing information provided in part by the Flint Hills Association of Realtors for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Flint Hills Association of Realtors 20222022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM </p>



    <h3>Florida Keys MLS (FLKMLS) </h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image27.png')}}" alt="" />
    <p>
        The data relating to real estate for sale on this website comes in part from the Internet Data Exchange
        program of the Florida Keys Board of Realtors®, Florida Keys MLS, Inc. Real Estate Listings held by
        brokerage firms other than (name of displaying real estate firm) are marked with the MLS logo and
        detailed information about them includes the name of the listing broker’s office.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM </p>


    <h3>Garden City MLS</h3>
    <p>
        Listing information provided in part by the Garden City Board of Realtors MLS for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Garden City Board of Realtors MLS 2022. All rights
        reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>


    <h3>Garden State MLS (GSMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image28.png')}}" alt="" />
    <p>
        The data relating to real estate for sale on this website comes in part from the IDX Program of Garden
        State Multiple Listing Service, L.L.C. Real estate listings held by other brokerage firms are marked as
        IDX Listing. The dissemination of listings on this website does not constitute the consent required by
        N.J.A.C. 11:5.6.1 (n) for the advertisement of listings exclusively for sale by another broker. Any such
        consent must be obtained in writing from the listing broker. Information deemed reliable but not
        guaranteed. This information is being provided for Consumers' personal, non-commercial use and may not
        be used for any purpose other than to identify prospective properties Consumers may be interested in
        purchasing.
    </p>
    <p>© 2022 Garden State Multiple Listing Service, L.L.C. All rights reserved. </p>
    <p>Last updated: Nov 30, 2022 12:11 PM </p>



    <h3>Georgia MLS (GAMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image29.png')}}" alt="" />
    <p>
        The data relating to real estate for sale on this web site comes in part from the Broker Reciprocity
        Program of Georgia MLS. Real estate listings held by brokerage firms other than ARIS360 Homes are marked
        with the Broker Reciprocity logo and detailed information about them includes the name of the listing
        brokers. Information deemed reliable but not guaranteed. Copyright 2022 Georgia MLS. All rights
        reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>



    <h3>Global Multiple Listing Service, Inc.</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image30.png')}}" alt="" />
    <p>
        ©2022 Global Multiple Listing Service, Inc. The data relating to real estate on this website comes in
        part from the Internet Data Exchange program of the GMLS. All information is deemed reliable but not
        guaranteed and should be independently verified. All properties subject to prior sale, change, or
        withdrawal. Neither listing broker(s), GMLS shall be responsible for any typographical errors,
        misinformation, or misprints, and shall be held totally harmless from any damages ARIS360ing from reliance
        upon these data. IDX information is provided exclusively for consumers’ personal, non-commercial use and
        may not be used for any purpose other than to identify prospective properties they may be interested in
        purchasing.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>


    <h3>Golden Empire MLS (GEMLS) </h3>
    <p>
        The information is being provided by Golden Empire MLS. Information deemed reliable but not guaranteed.
        Information is provided for consumers' personal, non-commercial use, and may not be used for any purpose
        other than the identification of potential properties for purchase. Copyright 2022 Golden Empire MLS.
        All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>


    <h3>Golden Isles AOR INC MLS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image31.png')}}" alt="" />
    <p>
        Listing information provided in part by the Golden Isles Association of Realtors INC MLS for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Golden Isles Association of Realtors INC MLS 2022.
        All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Grand Junction Area Realtor Association </h3>
    <p>
        Listing information provided in part by the Grand Junction Area Realtor Association for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Grand Junction Area Realtor Association MLS 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>



    <h3>Great Plains Regional MLS LLC</h3>
    <p>
        The information is being provided by Great Plains Regional MLS LLC. Information deemed reliable but not
        guaranteed. Information is provided for consumers' personal, non-commercial use, and may not be used for
        any purpose other than the identification of potential properties for purchase. Copyright 2022 Great
        Plains Regional MLS LLC. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Great Smoky Mountain Association of Realtors</h3>
    <p>
        Listing information provided in part by the Great Smokey Mountain Association of Realtors for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Great Smokey Mountain Association of Realtors 2022.
        All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM </p>



    <h3>Greater Alabama MLS</h3>
    <p>
        The information is being provided by Greater Alabama Multiple Listing Service, Inc. Information deemed
        reliable but not guaranteed. Information is provided for consumers' personal, non-commercial use, and
        may not be used for any purpose other than the identification of potential properties for purchase.
        Copyright 2022 Greater Alabama Multiple Listing Service, Inc. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM </p>



    <h3>Greater Augusta AOR</h3>
    <p>
        Listing information provided in part by the Charlottesville AOR, Greater Augusta AOR, and Harrison
        Rockingham AOR for personal, non-commercial use by viewers of this site and may not be reproduced or
        redistributed. All information is deemed reliable but not guaranteed. Copyright © Charlottesville AOR,
        Greater Augusta AOR, and Harrison Rockingham AOR 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>



    <h3>Greater Augusta MLS</h3>
    <p>
        Listing information provided in part by the Greater Augusta MLS for personal, non-commercial use by
        viewers of this site and may not be reproduced or redistributed. All information is deemed reliable but
        not guaranteed. Copyright © Greater Augusta MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Greater Binghamton AOR</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image32.png')}}" alt="" />
    <p>
        Listing information provided in part by the Greater Binghamton Association of REALTORS®, Inc. MLS for
        personal, non-commercial use by viewers of this site and may not be reproduced or redistributed. All
        information is deemed reliable but not guaranteed. Copyright © Greater Binghamton Association of
        REALTORS®, Inc. MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Greater Chattanooga Association of Realtors</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image33.png')}}" alt="" />
    <p>
        The information being provided is for consumers’ personal, noncommercial use and may not be used for any
        purpose other than to identify prospective properties consumers may be interested in purchasing.
        INFORMATION DEEMED RELIABLE BUT NOT GUARANTEED. ARIS360 Homes does not display the entire MLS of
        Chattanooga, Inc. database on this website.The listings of some real estate brokerage firms have been
        excluded. Copyright© 2002 by Chattanooga Association of REALTORS®. This site was last updated on 2022.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM </p>



    <h3>Greater El Paso Association of Realtors Multiple Listing Service (GEPARMLS)</h3>
    <p>
        The information is being provided by Greater El Paso Association of REALTORS® Multiple Listing Service,
        Inc. Information deemed reliable but not guaranteed. Information is provided for consumers' personal,
        non-commercial use, and may not be used for any purpose other than the identification of potential
        properties for purchase. © 2022 Greater El Paso Association of REALTORS® Multiple Listing Service, Inc.
        All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM </p>



    <h3>Greater Erie Board of Realtors MLS</h3>
    <p>
        Listing information provided in part by the Greater Erie Board of Realtors MLS for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Greater Erie Board of Realtors MLS 2022. All rights
        reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM </p>


    <h3>Greater Fort Lauderdale Multiple Listing Service (GFLMLS) </h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image34.png')}}" alt="" />
    <p>
        All listings featuring the BMLS logo are provided by BeachesMLS Inc. This information is not verified
        for authenticity or accuracy and is not guaranteed. Copyright 2022 Beaches Multiple Listing Service, Inc
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM </p>



    <h3>Greater Fort Polk Area Realtors (GFPAR)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image35.png')}}" alt="" />
    <p>
        Listing information provided in part by the Greater Fort Polk Area Realtors for personal, non-commercial
        use by viewers of this site and may not be reproduced or redistributed. All information is deemed
        reliable but not guaranteed. Copyright © Greater Fort Polk Area Realtors 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 08:19 AM</p>



    <h3>Greater Greenville MLS</h3>
    <p>
        The information is being provided by Greater Greenville MLS. Information deemed reliable but not
        guaranteed. Information is provided for consumers' personal, non-commercial use, and may not be used for
        any purpose other than the identification of potential properties for purchase. Copyright 2022 Greater
        Greenville MLS. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Greater Lansing AoR</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image36.png')}}" alt="" />
    <p>
        Listing information provided in part by the Greater Lansing AoR for personal, non-commercial use by
        viewers of this site and may not be reproduced or redistributed. All information is deemed reliable but
        not guaranteed. Copyright © Greater Lansing AoR 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM </p>


    <h3>Greater Las Vegas Association of Realtors (GLVAR)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image37.png')}}" alt="" />
    <p>
        The data relating to real estate for sale on this web site comes in part from the Internet Data Exchange
        program of the Greater Las Vegas Association of Realtors MLS. Real estate listings held by brokerage
        firms other than this site owner are marked with the IDX logo. GLVAR deems information reliable but not
        guaranteed. Information provided for consumers' personal, non-commercial use and may not be used for any
        purpose other than to identify prospective properties consumers may be interested in
        purchasing. Copyright 2022 of the Greater Las Vegas Association of Realtors MLS.
    </p>

    <p>
        <strong>Claims of Copyright Infringement & Related Issues (17 USC §512 et seq.)</strong>
    </p>


    <p>
        We respect the intellectual property rights of others. Anyone who believes their work has been
        reproduced in a way that constitutes copyright infringement may notify our agent by providing the
        following information:
    </p>

    <ul class="upper_alpha_list">
        <li>
            Identification of the copyrighted work that you claim has been infringed, or, if multiple
            copyrighted works at a single online site are covered by a single notification, a representative
            list of such works at the site;
        </li>
        <li>
            Identification of the material that you claim is infringing and needs to be removed, including a
            description of where it is located so that the copyright agent can locate it;
        </li>
        <li>
            Your address, telephone number, and if available, email address, so that the copyright agent may
            contact you regarding your complaint;
        </li>
        <li>
            A signed statement that the above information is accurate, that you have a good faith belief that
            the identified use of the material is not authorized by the copyright owner, its agent or the law;
            and, under the penalty of perjury, that you are the copyright owner or are authorized to act on the
            copyright owner's behalf in this situation.
        </li>
    </ul>

    <p>
        Upon obtaining such knowledge we will act expeditiously to remove, or disable access to, the material.
        Please be aware that there are substantial penalties for false claims.
    </p>
    <p>
        If a notice of copyright infringement has been wrongly filed against you, you may submit a counter
        notification to our agent. A valid counter notification is a written communication that incorporates the
        following elements:
    </p>

    <ul class="upper_alpha_list">
        <li>A physical or electronic signature of the poster;</li>
        <li>
            Identification of the material that has been removed or to which access has been disabled and the
            location at which the material appeared before it was removed or access to it was disabled;
        </li>
        <li>
            A statement under penalty of perjury that you have a good faith belief that the material was removed
            or disabled as a result of mistake or misidentification;
        </li>
        <li>
            Your name, address, and telephone number; a statement that you consent to the jurisdiction of the
            federal district court for the judicial district in which your address is located, or if your
            address is outside of the U.S, for any judicial district in which the service provider may be found;
            and that you will accept service of process from the complainant.
        </li>
    </ul>

    <p>Notices of the foregoing copyright issues should be sent as follows:</p>

    <strong>By mail:</strong>
    <p>The Greater Las Vegas Association of REALTORS® MLS</p>
    <p>1750 East Sahara Avenue</p>
    <p>Las Vegas, NV 89104</p>
    <p>United States</p>
    <p>Attention: DMCA Designated Agent</p>

    <p><strong>By email:</strong></p>

    <a href="mailto:copyright@glvar.org">copyright@glvar.org</a>

    <p>
        If you give notice of copyright infringement by email, an agent may begin investigating the alleged
        copyright infringement; however, we must receive your signed statement by mail or as an attachment to
        your e-mail before we are required to take any action.
    </p>
    <p>
        This information should not be construed as legal advice. We recommend that you seek independent legal
        counsel before filing a notification or counter-notification. For further information about the DMCA,
        please visit the United States Copyright Office website at: <a href="https://copyright.gov/onlinesp/"
            target="_blank">http://copyright.gov/onlinesp.</a>
    </p>

    <p>Last updated: Nov 30, 2022 12:10 PM</p>




    <h3>Greater Lehigh Valley (GLVRMLS)</h3>
    <p>
        The information is being provided by Greater Lehigh Valley REALTORS®. Information deemed reliable but
        not guaranteed. Information is provided for consumers' personal, non-commercial use, and may not be used
        for any purpose other than the identification of potential properties for purchase. © 2022 Greater
        Lehigh Valley REALTORS®. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM </p>


    <h3>Greater Mason BOR</h3>
    <p>
        © 2022 Mason City MLS (MCMLS) The information on this website is provided exclusively for consumers'
        personal, non-commercial use, and may not be used for any purpose other than to identify prospective
        properties consumers may be interested in purchasing. Information deemed reliable, but not guaranteed.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>



    <h3>Greater Northwest Indiana Association of Realtors MLS (GNIAR)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image38.png')}}" alt="" />
    <p>
        Listing information provided in part by the Greater NW Indiana MLS for personal, non-commercial use by
        viewers of this site and may not be reproduced or redistributed. All information is deemed reliable but
        not guaranteed. Copyright © Greater NW Indiana MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Greater Owensboro Realtor Association (GORAMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image39.png')}}" alt="" />
    <p>
        Listing information provided in part by the Greater Owensboro Realtor Association for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Greater Owensboro Realtor Association 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:08 PM</p>



    <h3>Greater Palm Springs MLS (GPSMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image40.png')}}" alt="" />
    <p>
        Information provided by the Greater Palm Springs Multiple Listing Service, a wholly owned entity of the
        California Desert Association of Realtors, and the Palm Springs Regional Association of Realtors. All
        data, including all measurements and calculations of area, is obtained from various sources and has not
        been, and will not be, verified by broker or MLS, and is not guaranteed. Properties may or may not be
        listed by the office/agent presenting the information. Copyright © 2022 California Desert Association of
        REALTORS And Flexmls. All rights reserved. U.S. Patent 6,910,045.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM </p>



    <h3>Greater Scranton Board of Realtors (GSBR) </h3>
    <p>
        Listing information provided in part by the Greater Scranton Board of Realtors for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Greater Scranton Board of Realtors 2022. All rights
        reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM</p>


    <h3>Greater Southern MLS (GSMLS LA) </h3>
    <p>
        Listing information provided in part by the Greater Southern MLS for personal, non-commercial use by
        viewers of this site and may not be reproduced or redistributed. All information is deemed reliable but
        not guaranteed. Copyright © Greater Southern MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Greenwich MLS</h3>
    <p>
        IDX information is provided exclusively for consumers' personal, non-commercial use, and may not be used
        for any purpose other than to identify prospective properties consumers may be interested in purchasing,
        and that the data is deemed reliable but is not guaranteed accurate by the Greenwich MLS.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM </p>



    <h3>Gulf Coast Multiple Listing Service (GCMLS AL)</h3>
    <p>
        Listing information provided in part by the Gulf Coast MLS for personal, non-commercial use by viewers
        of this site and may not be reproduced or redistributed. All information is deemed reliable but not
        guaranteed. Copyright © Gulf Coast MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>


    <h3>Gulf South Real Estate Info Network (GSREIN)</h3>
    <p>
        Copyright 2022, New Orleans Metropolitan Association of REALTORS®, Inc. All rights reserved. Information
        deemed reliable, but not verified or guaranteed. Users are responsible for checking the accuracy,
        completeness, currency, and status of all information. Information is provided for consumers' personal,
        non-commercial use, and may not be used for any purpose other than the identification of potential
        properties for purchase.
    </p>
    <p>ARIS360 Homes</p>
    <p>3900 N Causeway Blvd, Suite 1200</p>
    <p>Metairie, LA 70002 </p>
    <p>Licensed in Louisiana</p>
    <p>Last updated: Nov 30, 2022 12:09 PM</p>



    <h3>Harrison Rockingham AOR</h3>
    <p>
        Listing information provided in part by the Charlottesville AOR, Greater Augusta AOR, and Harrison
        Rockingham AOR for personal, non-commercial use by viewers of this site and may not be reproduced or
        redistributed. All information is deemed reliable but not guaranteed. Copyright © Charlottesville AOR,
        Greater Augusta AOR, and Harrison Rockingham AOR 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM</p>



    <h3>Hawaii Information Service</h3>
    <p>
        The information is being provided by Hawaii Information Service. Information deemed reliable but not
        guaranteed. Information is provided for consumers' personal, non-commercial use, and may not be used for
        any purpose other than the identification of potential properties for purchase. Copyright 2022 MLS
        Hawaii, Inc. All Rights Reserved.
    </p>
    <p>Alan Frace (R)</p>
    <p>ARIS360 Homes</p>
    <p>500 Ala Moana Blvd</p>
    <p>Suite 3A</p>
    <p>Honolulu HI 96813</p>
    <p>808-397-9621</p>
    <p>Alan.Frace@ARIS360 Homes.com</p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Heart of Missouri Board of Realtors MLS</h3>
    <p>
        Listing information provided in part by the Heart of Missouri Board of Realtors MLS for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Heart of Missouri Board of Realtors MLS 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Heartland Association of Realtors, Inc. MLS (HAOR)</h3>
    <p>
        Listing information provided in part by the Heartland MLS for personal, non-commercial use by viewers of
        this site and may not be reproduced or redistributed. All information is deemed reliable but not
        guaranteed. Copyright © Heartland MLS ${CURENT_YEAR}. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Heartland MLS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image41.png')}}" alt="" />
    <p>
        The information is being provided by Heartland Multiple Listing Service, Inc. Information deemed
        reliable but not guaranteed. Information is provided for consumers' personal, non-commercial use, and
        may not be used for any purpose other than the identification of potential properties for purchase.
        Copyright 2022 Heartland Multiple Listing Service, Inc.. All Rights Reserved.
    </p>
    <p>
        As consideration for the right to search this website operated by (name of HMLS Participant) for
        properties for sale or lease, I/We ("User") agree to the following terms and conditions:
    </p>
    <ol class="upper_alpha_list">
        <li>
            All data displayed on this website about properties for sale or lease are the proprietary asset of
            the Heartland Multiple Listing Service, Inc. ("HMLS"). HMLS owns all Intellectual Property Rights in
            and to such data, or the compilation of such data, including all copyright, patent, trade secret, or
            trademark rights. User will not contest HMLS' Intellectual Property Right claims, nor assist others
            in doing so. User agrees that in the event User infringes upon HMLS' Intellectual Property Rights in
            the property data displayed on this website, HMLS' remedies at law are inadequate, and that HMLS is
            entitled to temporary and permanent injunctive relief to prohibit such an infringement.
        </li>
        <li>
            User agrees that User is a bona fide potential purchaser or lessee of property in the market area
            served by HMLS and (name of broker). User agrees that any search performed by User of properties
            available for sale or lease utilizing this website is solely for the purpose of identifying
            properties in which User has legitimate and bona fide interest in buying or leasing.
        </li>
        <li>
            User agrees that User shall not use this website, or any of the property data accessible on this
            website, for any commercial or business purpose. User shall not sell, loan, exchange, or license, or
            otherwise retransmit the property data accessible on this website to any third party without the
            express written permission of HMLS and (name of broker).
        </li>
        <li>
            User waives any and all claims for damages of any kind against HMLS or (name of broker) by reason of
            Users’ use of this website, or the property data available at this website, including, but not
            limited to actual, punitive, special, or consequential damages, or lost profits or unrealized
            savings.
        </li>
        <li>
            This Agreement shall be governed by the laws of Kansas. User agrees that any suit to enforce this
            Agreement shall be brought in the state or federal courts having jurisdiction over Johnson County,
            Kansas. User waives any objection to the personal jurisdiction of such courts.
        </li>
        <li>
            In the event a judgment is entered against User in any action by or against User to enforce the
            parties’ obligations under this Agreement, User shall pay the prevailing parties' attorneys fees and
            costs incurred in the prosecution or defense of such action.
        </li>
        <li>
            User acknowledges and agrees that HMLS is a third party beneficiary of this Agreement and both (name
            of broker) and HMLS shall each have the authority to enforce its terms against User
        </li>
    </ol>
    <p>Last updated: Nov 30, 2022 12:12 PM</p>





    <h3>Henderson Audubon Board of Realtors (HABOR)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image42.png')}}" alt="" />
    <p>
        The data relating to real estate for sale on this website comes in part from the Internet Data Exchange
        Program of the Henderson Audubon Board of Realtors Multiple Listing Service. Real estate listings held
        by brokerage firms other than ARIS360 Homes Corporation are marked with the Internet Data Exchange Symbol
        or the Internet Data Exchange Thumbnail Symbol (a little black house) and detailed information about
        them includes the name of the listing IDX BROKERS. Information Deemed Reliable But Not Guaranteed.
        Copyright 2022 Henderson Audubon Board of Realtors®
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM</p>



    <h3>Hernando County Association of Realtors</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image43.png')}}" alt="" />
    <p>
        Listing information provided in part by the Hernando County Association of Realtors for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Hernando County Association of Realtors 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>


    <h3>HiCentral MLS</h3>
    <p>
        Some of the active listings appearing on this site may be listed by other REALTORS(R). If you are
        interested in those active listings, ARIS360 Homes Corporation may represent you as as a buyer's agent. If
        the active listing you are interested in is ARIS360 Homes Corporation's, you may speak with one of ARIS360
        Homes Corporation's agents regarding your options for representation. Information is provided for
        personal, non-commercial use only. Based on information from the Multiple Listing Service of HiCentral
        MLS, Ltd. Listings last updated on 30. Information is deemed reliable but not guaranteed. Copyright 2022
        by HiCentral MLS, Ltd.
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM</p>


    <h3>Hopkinsville Christian and Todd County Association of Realtors (HCTCBOR)</h3>
    <p>
        Listing information provided in part by the Hopkinsville Christian & Todd County Association of Realtors
        for personal, non-commercial use by viewers of this site and may not be reproduced or redistributed. All
        information is deemed reliable but not guaranteed. Copyright © Hopkinsville Christian & Todd County
        Association of Realtors 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Houston Association of Realtors Multiple Listing Service (HARMLS)</h3>
    <p>
        Copyright © 2022, Houston Realtors Information Service, Inc. All information provided is deemed reliable
        but is not guaranteed and should be independently verified.
    </p>
    <p>
        Any estimate of value was prepared using automated processes and should not be considered a comparative
        market analysis (CMA) or appraisal. You may contact ARIS360 Homes to provide additional information and
        analysis for a more accurate estimate of the property's value.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>


    <h3>Hudson County MLS (HCMLS)</h3>
    <p>
        The information is being provided by Hudson County MLS. Information deemed reliable but not guaranteed.
        Information is provided for consumers personal, non-commercial use, and may not be used for any purpose
        other than the identification of potential properties for purchase. Copyright 2022 Hudson County MLS.
        All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM</p>


    <h3>Hudson Valley Catskill Region MLS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image44.png')}}" alt="" />
    <p>
        The data relating to real estate on this website comes, in part, through the IDX of the Hudson Valley
        Catskill Region MLS. Real estate listings held by brokerage firms other than ARIS360 Homes are marked with
        the IDX logo and detailed information about them includes the name of the listing broker. Information is
        provided exclusively for consumers’ personal, non-commercial use, and may not be used for any purpose
        other than to identify prospective properties consumers may be interested in purchasing. All information
        provided is deemed reliable but is not guaranteed and should be independently verified. Copyright ©
        Hudson Valley Catskill Region MLS. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>


    <h3>Humboldt Association of Realtors</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image45.png')}}" alt="" />
    <p>
        Based on information from the Humboldt Association of REALTORS® as of 2022. All data, including all
        measurements and calculations of area, is obtained from various sources and has not been, and will not
        be, verified by broker or MLS. All information should be independently reviewed and verified for
        accuracy. Properties may or may not be listed by the office/agent presenting the information.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM </p>




    <h3>Imperial Association of Realtors</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image46.png')}}" alt="" />
    <p>
        Based on information from the Imperial Association of REALTORS® as of 2022. All data, including all
        measurements and calculations of area, is obtained from various sources and has not been, and will not
        be, verified by broker or MLS. All information should be independently reviewed and verified for
        accuracy. Properties may or may not be listed by the office/agent presenting the information.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Incline Village Realtors MLS (IVRMLS)</h3>
    <p>
        Listing information provided in part by the Incline Village Multiple Listing Service for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Incline Village Multiple Listing Service 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>


    <h3>Indiana Regional MLS </h3>
    <p>
        IDX information is provided exclusively for consumers’ personal, non-commercial use and may not be used
        for any purpose other than to identify prospective properties consumers may be interested in purchasing.
        Data is deemed reliable but is not guaranteed accurate by the MLS. The Price per square footage value is
        a derived value not provided by IRMLS.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM </p>


    <h3>Information and Real Estate Services, LLS (IRES)</h3>
    <p>
        Information source: Information and Real Estate Services, LLC. Provided for limited non-commercial use
        only under IRES Rules. © Copyright IRES. Listing information provided exclusively for consumers'
        personal, non-commercial use and may not be used for any purpose other than to identify prospective
        properties consumers may be interested in purchasing. Information deemed reliable but not guaranteed by
        the MLS.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>


    <h3>Intermountain MLS Boise, ID (IMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image47.png')}}" alt="" />
    <p>
        IDX information is provided exclusively for consumers’ personal, non-commercial use, that it may not be
        used for any purpose other than to identify prospective properties consumers may be interested in
        purchasing. IMLS does not assume any liability for missing or inaccurate data. Any search result and
        subsequent display of listings must have the following disclaimer: Information provided by IMLS is
        deemed reliable but not guaranteed.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM</p>


    <h3>Iowa Association of Realtors (IAR)</h3>
    <p>
        Listing information provided in part by the Iowa Association of Realtors for personal, non-commercial
        use by viewers of this site and may not be reproduced or redistributed. All information is deemed
        reliable but not guaranteed. Copyright © Iowa Association of Realtors 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>



    <h3>Iowa City Area AOR</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image48.png')}}" alt="" />
    <p>
        Listing information is deemed reliable, but not guaranteed accurate by the MLS.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>



    <h3>Iowa Great Lakes BOR</h3>
    <p>
        Listing information provided in part by the Iowa Great Lakes Board of REALTORS® for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Iowa Great Lakes Board of REALTORS® 2022. All rights
        reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM</p>


    <h3>Ithaca BOARD OF REALTORS MLS</h3>
    <p>
        This information has been obtained from sources believed to be reliable, but no representations or
        warranties, expressed or implied, as to the accuracy of the information are being made by Ithaca Board
        of REALTORS® or ARIS360 Homes Corporation. Anyone using this information without independently verifying
        its accuracy bears all risk for any inaccuracies.Copyright © Ithaca Board of Realtors 2022. All rights
        reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>


    <h3>Jefferson City Area Board of Realtors</h3>
    <p>
        Listing information provided in part by the Jefferson City Area Board of Realtors MLS for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Jefferson City Area Board of Realtors MLS 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>


    <h3>Kings County Board of Realtors</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image49.png')}}" alt="" />
    <p>
        Based on information from the Kings County Board of Realtors®, as of 2022. All data, including all
        measurements and calculations of area, is obtained from various sources and has not been, and will not
        be, verified by broker or MLS. All information should be independently reviewed and verified for
        accuracy. Properties may or may not be listed by the office/agent presenting the information.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>


    <h3>Knoxville MLS</h3>
    <p>
        The information is being provided by Multiple Listing Service of the Knoxville Area Association of
        REALTORS. Information deemed reliable but not guaranteed. Information is provided for consumers'
        personal, non-commercial use, and may not be used for any purpose other than the identification of
        potential properties for purchase. 2022 Multiple Listing Service of the Knoxville Area Association of
        REALTORS. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>


    <h3>Lake Havasu Association of Realtors </h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image50.png')}}" alt="" />
    <p>
        Listing information provided in part by the Lake Havasu Association of Realtors for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Lake Havasu Association of Realtors 2022. All rights
        reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Lake Martin Area Association of Realtors </h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image51.png')}}" alt="" />
    <p>
        Listing information provided in part by the Lake Martin Area Association of Realtors for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Lake Martin Area Association of Realtors 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Lake of the Ozarks Board of REALTORS</h3>
    <p>
        Listing information provided in part by the Lake Ozark MLS for personal, non-commercial use by viewers
        of this site and may not be reproduced or redistributed. Real estate listings held by brokerage firms
        other than ARIS360 Homes Corporation are governed by MLS Rules and Regulations and detailed information
        about them includes the name of the listing companies. All information is deemed reliable but not
        guaranteed. Copyright © Lake Ozark MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM </p>



    <h3>Lancaster Board of Realtors</h3>
    <p>
        Listing information provided in part by the Lancaster Board of Realtors for personal, non-commercial use
        by viewers of this site and may not be reproduced or redistributed. All information is deemed reliable
        but not guaranteed. Copyright © Lancaster Board of Realtors 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM </p>



    <h3>Las Cruces Association of Realtor Southern New Mexico MLS (SNMMLS)</h3>
    <p>
        Listing information provided in part by the Southern New Mexico Multiple Listing Service for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Southern New Mexico Multiple Listing Service 2022.
        All rights reserved.
    </p>
    <p>
        Last updated: Nov 30, 2022 12:11 PM
    </p>



    <h3>Lawrence MLS</h3>
    <p>
        The data displayed on this page is confidential, proprietary, and copyrighted data of Lawrence Multiple
        Listing Service, Inc., of the Lawrence, Kansas, Board of REALTORS®, Copyright 2022. Lawrence Multiple
        Listing Service, Inc., and ARIS360 Homes do not make any warranty or representation concerning the
        timeliness or accuracy of the data displayed herein. In consideration for the receipt of the data on
        this page, the recipient agrees to use the data solely for the private non-commercial purpose of
        identifying a property in which the recipient has a good faith interest in acquiring.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Lee County Association of Realtors</h3>
    <p>
        Listing information provided in part by the Lee County Association of REALTORS® for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Lee County Association of REALTORS® 2022. All rights
        reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Longleaf Pine Realtors, Inc (LPRMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image52.png')}}" alt="" />
    <p>
        Listing information provided in part by the Longleaf Pine Realtors, Inc for personal, non-commercial use
        by viewers of this site and may not be reproduced or redistributed. All information is deemed reliable
        but not guaranteed. Copyright © Longleaf Pine Realtors, Inc. 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM</p>



    <h3>Lowcountry Regional MLS (LRMLS)</h3>
    <p>
        Listing information provided in part by the Lowcountry Regional MLS, Inc. for personal, non-commercial
        use by viewers of this site and may not be reproduced or redistributed. All information is deemed
        reliable but not guaranteed. Copyright © Lowcountry Regional MLS, Inc. 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM</p>


    <h3>Lubbock Association of Realtors MLS</h3>
    <p>
        Listing information provided in part by the Lubbock Association of Realtors for personal, non-commercial
        use by viewers of this site and may not be reproduced or redistributed. All information is deemed
        reliable but not guaranteed. Copyright © Lubbock Association of Realtors 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM </p>


    <h3>Luzerne County Association of Realtors (LCAR)</h3>
    <p>
        Listing information provided in part by the Luzerne County Association of Realtors for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Luzerne County Association of Realtors 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Lynchburg Association of Realtors (LMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image53.png')}}" alt="" />
    <p>
        Listing information provided in part by the Lynchburg Association of Realtors for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Lynchburg Association of Realtors 2022. All rights
        reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>




    <h3>Madisonville-Hopkins County Board of Realtors MLS (mhcbor)</h3>
    <p>
        Listing information provided in part by the Madisonville-Hopkins County Board of Realtors MLS for
        personal, non-commercial use by viewers of this site and may not be reproduced or redistributed. All
        information is deemed reliable but not guaranteed. Copyright © Madisonville-Hopkins County Board of
        Realtors MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Maine Real Estate Information System (MREIS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image54.png')}}" alt="" />
    <p>
        Listing data is derived in whole or in part from the Maine IDX and is for consumers' personal,
        noncommercial use only. Dimensions are approximate and not guaranteed. All data should be independently
        verified. Copyright 2022 Maine Real Estate
    </p>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image55.png')}}" alt="" />
    <p>Information System, Inc. All Rights Reserved.</p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Mammoth Lakes Board of Realtors MLS</h3>
    <p>
        Based on information from the Mammoth Lakes Board of REALTORS®. All data, including all measurements and
        calculations of area, is obtained from various sources and has not been, and will not be, verified by
        broker or MLS. All information should be independently reviewed and verified for accuracy. Properties
        may or may not be listed by the office/agent presenting the information.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>


    <h3>Marco Multi List </h3>
    <p>
        Listing information provided in part by the MarcoMls for personal, non-commercial use by viewers of this
        site and may not be reproduced or redistributed. All information is deemed reliable but not guaranteed.
        Copyright © MarcoMls 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM</p>



    <h3>Martha's Vineyard MLS (MVMLS)</h3>
    <p>
        Listing information provided in part by the Martha's Vineyard MLS for personal, non-commercial use by
        viewers of this site and may not be reproduced or redistributed. All information is deemed reliable but
        not guaranteed. Copyright © Martha's Vineyard MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Martin County REALTORS® of the Treasure Coast, Inc. (MCRTC)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image56.png')}}" alt="" />
    <p>
        The data relating to real estate for sale on this web site comes in part from a cooperative data
        exchange program of the Martin County REALTORS® of the Treasure Coast, Inc. Real estate listings held by
        brokerage firms other than ARIS360 Homes are marked with the IDX logo or name and detailed information
        about such listings includes the name of the listing brokers. Data provided is deemed reliable but is
        not guaranteed. Information is provided for consumers' personal, non-commercial use, and may not be used
        for any purpose other than the identification of potential properties for purchase. Copyright 2022
        Martin County REALTORS® of the Treasure Coast, Inc. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM </p>


    <h3>McAllen MLS</h3>
    <p>
        The information is being provided by GMAR MLS. Information deemed reliable but not guaranteed.
        Information is provided for consumers' personal, non-commercial use, and may not be used for any purpose
        other than the identification of potential properties for purchase. Copyright 2022 GMAR MLS. All Rights
        Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>


    <h3>Memphis MLS </h3>
    <p>
        Copyright© 2022 Memphis Area Association of REALTORS®. The information provided is for the consumer's
        personal, non-commercial use and may not be used for any purpose other than to identify prospective
        properties that the consumer may be interested in purchasing. Information deemed reliable, but is not
        guaranteed accurate. Some or all of the listings displayed may not belong to the firm whose web site is
        being visited.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>


    <h3>Metro Multiple Listing Service (Metro MLS)</h3>
    <p>
        The information is being provided by WIREX. Information deemed reliable but not guaranteed. Information
        is provided for consumers' personal, non-commercial use, and may not be used for any purpose other than
        the identification of potential properties for purchase. Copyright 2022 WIREX. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>


    <h3>Metro Search MLS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image57.png')}}" alt="" />
    <p>
        a relating to real estate for sale on this web site comes in part from the Internet Data Exchange
        Program of Metro Search, Inc. Real estate listings held by brokerage firms other than ARIS360 Homes
        Corporation are marked with the Internet Data Exchange logo or the Internet Data Exchange thumbnail logo
        and detailed information about each listing includes the name of the listing broker.
    </p>
    <p>Copyright 2022 Metro Search, Inc.</p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>




    <h3>Metrolist Services, Inc (Sacramento)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image58.png')}}" style="display: inline-flex;" alt="" />
    <span>
        Every person who intends to view or use such MLS information agrees to Terms of Use that include
        substantially the following terms and conditions:
        All measurements and all calculations of area (i.e., Sq Ft and Acreage) are approximate. Broker has
        represented to MetroList that Broker has a valid listing signed by seller authorizing placement in the
        MLS. Above information is provided by Seller and/or other sources and has not been verified by Broker.
        Copyright 2022 MetroList Services, Inc. Information being provided by Metrolist Services, Inc. is for
        consumers' personal, non-commercial use and may not be used for any purpose other than to identify
        prospective properties consumers may be interested in purchasing.
    </span>

    <p><strong>Terms of Use</strong></p>


    <ol class="number_list">
        <li>
            The following are terms of a legal agreement between you, the person viewing and/or using this
            Internet site ("User") and the operator of this Internet site ("Provider.") By accessing, browsing
            and/or using this Internet site ("Site"), User acknowledges that User has read, understood, and
            agrees to be bound by these terms and to comply with all applicable laws and regulations, including
            but not limited to U.S. export and re-export control laws and regulations. If User does not agree to
            these terms, User is not authorized to use this Site. The material provided on this Site is
            protected by law, including, but not limited to, United States Copyright law and international
            treaties.
        </li>
        <li>
            User must be a prospective purchaser or seller of real estate with a bona fide interest in the
            purchase or sale of such real estate.
        </li>
        <li>
            All real estate data provided on this Site is strictly for the personal, private, non-commercial use
            of User and is not made available for redistribution, retransmission, reformatting, modification or
            copying. User may not sell or use any of the real estate data on this Site for any purpose other
            than attempting to evaluate houses or properties for sale or purchase by User. User acknowledges
            that the real estate data on this Site is provided by MetroList Services, Inc., a California
            corporation ("MetroList"), and User acknowledges the validity of MetroList's copyright as to such
            data. User expressly acknowledges and agrees that MetroList is a third-party beneficiary of these
            Terms of Use, and that MetroList will be entitled to enforce these Terms of Use against User.
        </li>
        <li>
            To the fullest extent permitted by law, the data on this Site is provided "as is," without warranty
            or representation of any kind, either express or implied, as to the nature, quality, characteristics
            or value of any property or information to which the data pertains. NEITHER PROVIDER NOR METROLIST
            MAKES ANY WARRANTIES, EXPRESS OR IMPLIED, REGARDING THE DATA DISPLAYED ON THIS SITE, INCLUDING, BUT
            NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE, OR
            AS TO THE TIMELINESS, ACCURACY AND/OR COMPLETENESS OF THE DATA.
        </li>
        <li>
            NEITHER PROVIDER NOR METROLIST SHALL BE LIABLE FOR ANY INCIDENTAL, SPECIAL, CONSEQUENTIAL, INDIRECT,
            SPECIAL, PUNITIVE OR EXEMPLARY DAMAGES WHATSOEVER (INCLUDING WITHOUT LIMITATION, DAMAGES FOR LOSS OF
            BUSINESS INFORMATION, LOSS OF DATA, LOST PROFITS, LOSS OF CUSTOMERS OR OTHER PECUNIARY LOSS),
            ARIS360ING OUT OF THE USE OR INABILITY TO USE THE DATA DISPLAYED ON THIS SITE, WHETHER THE CLAIM OR
            CAUSE OF ACTION ARIS360ES IN TORT, CONTRACT, NEGLIGENCE, STRICT LIABILITY OR UNDER ANY OTHER LEGAL
            THEORY.
        </li>
        <li>
            User agrees that the prevailing party or parties in any action brought to enforce or for breach of
            these Terms of Use shall be entitled to recover, in addition to any other relief, that party's or
            those parties' reasonable attorney's fees and court costs incurred in such action from the
            non-prevailing party or parties
        </li>
    </ol>

    <p>Last updated: Nov 30, 2022 12:09 PM</p>




    <h3>Metrolist,Inc. (REColorado)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image59.png')}}" alt="" />
    <p>
        The content relating to real estate for sale in this Web site comes in part from the Internet Data
        eXchange (“IDX”) program of METROLIST, INC., DBA RECOLORADO® Real estate listings held by brokers other
        than ARIS360 Homes are marked with the IDX Logo. This information is being provided for the consumers’
        personal, non-commercial use and may not be used for any other purpose. All information subject to
        change and should be independently verified.
    </p>
    <ol class="number_list">
        <li>
            This publication is designed to provide information with regard to the subject matter covered. It is
            displayed with the understanding that the publisher and authors are not engaged in rendering real
            estate, legal, accounting, tax, or other professional services and that the publisher and authors
            are not offering such advice in this publication. If real estate, legal, or other expert assistance
            is required, the services of a competent, professional person should be sought.
        </li>
        <li>
            The information contained in this publication is subject to change without notice. METROLIST, INC.,
            DBA RECOLORADO MAKES NO WARRANTY OF ANY KIND WITH REGARD TO THIS MATERIAL, INCLUDING, BUT NOT
            LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.
            METROLIST, INC., DBA RECOLORADO SHALL NOT BE LIABLE FOR ERRORS CONTAINED HEREIN OR FOR ANY DAMAGES
            IN CONNECTION WITH THE FURNISHING, PERFORMANCE, OR USE OF THIS MATERIAL.
        </li>
        <li>
            <p>PUBLISHER'S NOTICE:</p>
            <p>
                All real estate advertised herein is subject to the Federal Fair Housing Act and the Colorado
                Fair Housing Act, which Acts make it illegal to make or publish any advertisement that indicates
                any preference, limitation, or discrimination based on race, color, religion, sex, handicap,
                familial status, or national origin.
            </p>
        </li>
        <li>
            METROLIST, INC., DBA RECOLORADO will not knowingly accept any advertising for real estate that is in
            violation of the law. All persons are hereby informed that all dwellings advertised are available on
            an equal opportunity basis.
        </li>
        <li>
            <img src="{{asset('public/assets/images/homes_terms_of_use/image55.png')}}" alt="" />
            <p>© 2022 METROLIST, INC., DBA RECOLORADO® – All Rights Reserved </p>
            <p>6455 S. Yosemite St., Suite 500 </p>
            <p>Greenwood Village, CO 80111 USA</p>
        </li>
        <li>
            ALL RIGHTS RESERVED WORLDWIDE. No part of this publication may be reproduced, adapted, translated,
            stored in a retrieval system or transmitted in any form or by any means, electronic, mechanical,
            photocopying, recording, or otherwise, without the prior written permission of the publisher. The
            information contained herein including but not limited to all text, photographs, digital images,
            virtual tours, may be seeded and monitored for protection and tracking.
        </li>
    </ol>

    <p>Last updated: Nov 30, 2022 12:10 PM</p>


    <h3>Metropolitan Indianapolis Board of REALTORS (MIBOR) </h3>
    <p>
        The information is being provided by Metropolitan Indianapolis Board of REALTORS®. Information deemed
        reliable but not guaranteed. Information is provided for consumers' personal, non-commercial use, and
        may not be used for any purpose other than the identification of potential properties for purchase. ©
        2022 Metropolitan Indianapolis Board of REALTORS®. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>


    <h3>Miami MLS (MARMLS)</h3>
    <p>
        The MLS data provided for the property above is provided courtesy of ARIS360 Homes Corporation. Source:
        Southeast Florida MLS. Information is deemed reliable but not guaranteed. © 2022. The listing data on
        this page comes in part from the Internet Data Exchange (IDX), a collaboration between the following
        REALTOR(R) associations in the Southeast Florida Multiple Listing Service (MLS): Miami Association of
        REALTORS®, REALTOR® Association of Greater Ft. Lauderdale and South Broward Board of REALTORS®. All
        rights reserved. The information being provided is for consumers' personal, non-commercial use and may
        not be used for any purpose other than to identify prospective properties consumers may be interested in
        purchasing. Use of search facilities of data on the site, other than a consumer looking to purchase real
        estate, is prohibited.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM </p>


    <h3>Mid America Realty Information Service (MARIS360)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image60.png')}}" alt="" />
    <p>
        The information is being provided by Mid America Regional Information Systems MLS. Information deemed
        reliable but not guaranteed. Information is provided for consumers' personal, non-commercial use, and
        may not be used for any purpose other than the identification of potential properties for purchase.
        Copyright 2022 Mid America Regional Information Systems MLS. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Mid Hudson MLS (MHMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image61.png')}}" alt="" />
    <p>
        The data relating to real estate for sale on this web site comes in part from MHMLS. Real estate
        listings held by brokerage firms other than ARIS360 Homes are marked with the MHMLS logo or an abbreviated
        logo and detailed information about them includes the name of the listing broker. ARIS360 Homes
        participates in more than one MLS and reserves the right to select the specific properties listed on
        this web site. Information Believed Accurate But Not Warranted. Copyright 2022 Mid-Hudson Multiple
        Listing Service, Inc. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM </p>



    <h3>Mid-Kansas MLS</h3>
    <p>
        Listing information provided in part by the Mid-Kansas MLS for personal, non-commercial use by viewers
        of this site and may not be reproduced or redistributed. All information is deemed reliable but not
        guaranteed. Copyright © Mid-Kansas MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Midwest Real Estate Data LLC (MRED)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image62.png')}}" alt="" />
    <p>
        Copyright 2022 Midwest Real Estate Data LLC. All rights reserved. The data relating to real estate for
        sale on this web site comes in part from the Broker Reciprocity Program of the Midwest Real Estate Data
        LLC. Listing information is deemed reliable but not guaranteed. NOTICE: Many homes contain recording
        devices, and buyers should be aware they may be recorded during a showing.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>


    <h3>Minnesota Regional MLS (Northstar MLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image63.png')}}" alt="" />
    <p>
        The data relating to real estate for sale on this web site comes in part from the Broker Reciprocity
        Program of the Regional Multiple Listing Service of Minnesota, Inc. Real estate listings held by
        brokerage firms other than ARIS360 Homes are marked with the Broker Reciprocity logo or the Broker
        Reciprocity thumbnail logo (a little black house) and detailed information about them includes the name
        of the listing brokers.
    </p>
    <p>
        The broker providing these data believes them to be correct, but advises interested parties to confirm
        them before relying on them in a purchase decision.
    </p>
    <p>© 2022 Regional Multiple Listing Service of Minnesota, Inc. All rights reserved.</p>



    <h3>Digital Millennium Copyright Act (DMCA) Notices:</h3>
    <p>
        The Digital Millennium Copyright Act of 1998, 17 U.S.C. § 512 (the "DMCA"), provides recourse for
        copyright owners who believe that material appearing on the Internet infringes their rights under U.S.
        copyright law. If you believe in good faith that any content or material made available in connection
        with our website or services infringes your copyright, you (or your agent) may send us a notice
        requesting that the content or material be removed, or access to it blocked. Notices and counter-notices
        should be sent in writing by mail to: Michael Bisping, Director of Customer Relations at Regional
        Multiple Listing Service of Minnesota, Inc., 2550 University Avenue West, Suite 259S, Saint Paul, MN
        55114 or by email to mbisping@northstarmls.com.
    </p>
    <p>
        The DMCA requires that your notice of alleged copyright infringement include the following information:
        (1) description of the copyrighted work that is the subject of claimed infringement; (2) description of
        the alleged infringing content and information sufficient to permit us to locate the content; (3)
        contact information for you, including your address, telephone number and e-mail address; (4) a
        statement by you that you have a good faith belief that the content in the manner complained of is not
        authorized by the copyright owner, or its agent, or by the operation of any law; (5) a statement by you,
        signed under penalty of perjury, that the information in the notification is accurate and that you have
        the authority to enforce the copyrights that are claimed to be infringed; and (6) a physical or
        electronic signature of the copyright owner or a person authorized to act on the copyright owner's
        behalf. Failure to include all of the above information may result in the delay of the processing of
        your complaint.
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM</p>



    <h3>MiRealSource - Michigan Multiple Listing Service</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image64.png')}}" alt="" />
    <p>
        Information is provided for consumers' personal, non-commercial use, and may not be used for any purpose
        other than the identification of potential properties for purchase. Provided through IDX via
        MiRealSource. Courtesy of MiRealSource Shareholder. Copyright MiRealSource. The information published
        and disseminated by MiRealSource is communicated verbatim, without change by MiRealSource, as filed with
        MiRealSource by its members. The accuracy of all information, regardless of source, is not guaranteed or
        warranted. All information should be independently verified. Copyright 2022 MiRealSource. All rights
        reserved. The information provided hereby constitutes proprietary information of MiRealSource, Inc. and
        its shareholders, affiliates and licensees and may not be reproduced or transmitted in any form or by
        any means, electronic or mechanical, including photocopy, recording, scanning or any information storage
        and retrieval system, without written permission from MiRealSource, Inc. Provided through IDX via
        MiRealSource, as the "Source MLS", courtesy of the Originating MLS shown on the property listing, as the
        Originating MLS. The information published and disseminated by the Originating MLS is communicated
        verbatim, without change by the Originating MLS, as filed with it by its members. The accuracy of all
        information, regardless of source, is not guaranteed or warranted. All information should be
        independently verified. Copyright 2022 MiRealSource. All rights reserved. The information provided
        hereby constitutes proprietary information of MiRealSource, Inc. and its shareholders, affiliates and
        licensees and may not be reproduced or transmitted in any form or by any means, electronic or
        mechanical, including photocopy, recording, scanning or any information storage and retrieval system,
        without written permission from MiRealSource, Inc.
    </p>
    <p>Last updated: Nov 30, 2022 12:07 PM </p>


    <h3>MLS of Central Oregon (MLSCO) </h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image65.png')}}" alt="" />
    <p>
        The information is being provided by MLS of Central Oregon. Information deemed reliable but not
        guaranteed. Information is provided for consumers' personal, non-commercial use, and may not be used for
        any purpose other than the identification of potential properties for purchase. Copyright 2022 MLS of
        Central Oregon. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>MLS of The Roanoke Valley</h3>
    <p>
        Although the Multiple Listing Service of The Roanoke Valley is the single source for these listings,
        listing data appearing on this web site does not necessarily reflect the entirety of all available
        listings within the Multiple Listing Service. All listing data is refreshed regularly, but its accuracy
        is subject to market changes. All copyrights and intellectual property rights are the exclusive property
        of the Multiple Listing Service of The Roanoke Valley. Whether obtained from a search result or
        otherwise, visitors to this web site may only use this listing data for their personal, non-commercial
        benefit. The unauthorized retrieval or use of this listing data is prohibited. All information is deemed
        reliable but not guaranteed, and should be independently verified.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>MLS United</h3>
    <p>
        Listing information provided in part by MLS United for personal, non-commercial use by viewers of this
        site and may not be reproduced or redistributed. All information is deemed reliable but not guaranteed.
        Copyright © MLS United 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>


    <h3>MLSListings Inc. (MLSListings)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image66.png')}}" alt="" />
    <p>
        Property Information © 2022 MLSListings Inc. All rights reserved. Listing information is deemed reliable
        but not guaranteed. Certain information contained herein is derived from information which is the
        licensed property of, and copyrighted by, MLSListings Inc. The viewer acknowledges ownership and
        validity of its copyright. Information provided is for personal, non-commercial use by a viewer with a
        bona fide interest in the purchase or sale of real estate of the type being offered via this website or
        other electronic means. The viewer is prohibited from copying, redistributing or retransmitting any of
        the data or information provided by MLSListing, Inc.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>


    <h3>MLSOK </h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image67.png')}}" alt="" />
    <p>
        Copyright 2022 MLSOK, Inc. We do not attempt to verify the currency, completeness, accuracy or
        authenticity of the data contained herein. Information is subject to verification by all parties and is
        subject to transcription and transmission errors. All information is provided “as is”. The listing
        information provided is for consumers’ personal, non-commercial use and may not be used for any purpose
        other than to identify prospective purchasers. This data is copyrighted and may not be transmitted,
        retransmitted, copied, framed, repurposed, or altered in any way for any other site, individual and/or
        purpose without the express written permission of MLSOK, Inc. Information last updated on 30.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>




    <h3>Monmouth County Multiple Listing Service (MOMLS)</h3>
    <p>
        The information is being provided by Monmouth-Ocean MLS. Information deemed reliable but not guaranteed.
        Information is provided for consumers' personal, non-commercial use, and may not be used for any purpose
        other than the identification of potential properties for purchase.
    </p>
    <p>© 2022 Monmouth-Ocean MLS. All Rights Reserved. </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Mount Rushmore Area Assoication of Realtors</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image68.png')}}" alt="" />
    <p>
        Copyright © Mount Rushmore Area Association of REALTORS®., Inc. Multiple Listing Service 2022. All
        rights reserved. Listing information provided in part by the Mount Rushmore Area Association of
        REALTORS®., Inc. Multiple Listing Service for personal, non-commercial use by viewers of this site and
        may not be reproduced or redistributed. All information is deemed reliable but not guaranteed.
    </p>
    <p>
        The data relating to real estate for sale on this web site comes in part from the Broker Reciprocity
        Program of the Mount Rushmore Area Association of REALTORS® Multiple Listing Service. Real estate
        listings held by brokerage firms other than ARIS360 Homes Corporation are marked with the Broker
        ReciprocityTM logo or the Broker Reciprocity thumbnail logo (a little black house) and detailed
        information about them includes the name of the listing brokers.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM </p>




    <h3>Multiple Listing Service of The Galveston Association of REALTORS&reg;, Inc.</h3>
    <p>
        The information is being provided by Multiple Listing Service of The Galveston Association of REALTORS®,
        Inc. Information deemed reliable but not guaranteed. Information is provided for consumers’ personal,
        non-commercial use, and may not be used for any purpose other than the identification of potential
        properties for purchase. Copyright 2022 Multiple Listing Service of The Galveston Association of
        REALTORS®, Inc. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM </p>


    <h3>Multiple Listing Service of the Greater Baton Rouge Association of REALTORS&reg;, Inc. (GBRMLS)</h3>
    <p>
        The information is being provided by Multiple Listing Service of the Greater Baton Rouge Association of
        REALTORS®, Inc. Information deemed reliable but not guaranteed. Information is provided for consumers'
        personal, non-commercial use, and may not be used for any purpose other than the identification of
        potential properties for purchase. Some properties that appear for sale on the website may no longer be
        available because they are under contract, sold, or are no longer being offered for sale. © 2022
        MLSBOX/GBRAR, All Rights Reserved.
    </p>

    <p>ARIS360 Homes </p>
    <p>213 Spartan Loop </p>
    <p>Slidell, LA 70458 </p>
    <p>Licensed in Louisiana </p>
    <p>Last updated: Nov 30, 2022 12:09 PM </p>



    <h3>Multiple Listing Service Property Information Network (MLSPIN) - Boston Area MLS</h3>
    <p>
        The property listing data and information, or the Images, set forth herein were provided to MLS Property
        Information Network, Inc. from third party sources, including sellers, lessors and public records, and
        were compiled by MLS Property Information Network, Inc. The property listing data and information, and
        the Images, are for the personal, non-commercial use of consumers having a good faith interest in
        purchasing or leasing listed properties of the type displayed to them and may not be used for any
        purpose other than to identify prospective properties which such consumers may have a good faith
        interest in purchasing or leasing. MLS Property Information Network, Inc. and its subscribers disclaim
        any and all representations and warranties as to the accuracy of the property listing data and
        information, or as to the accuracy of any of the Images, set forth herein.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Muscatine BOR</h3>
    <p>
        Listing information provided in part by the Muscatine BOR for personal, non-commercial use by viewers of
        this site and may not be reproduced or redistributed. All information is deemed reliable but not
        guaranteed. Copyright © Muscatine BOR 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>My Florida Regional MLS DBA Stellar MLS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image69.png')}}" alt="" />
    <p>
        The information being provided by My Florida Regional MLS DBA Stellar MLS is for the consumer's
        personal, non-commercial use and may not be used for any purpose other than to identify prospective
        properties the consumer may be interested in purchasing. Any information relating to real estate for
        sale referenced on this web site comes from the Internet Data Exchange (IDX) program of My Florida
        Regional MLS DBA Stellar MLS. Real estate listings held by brokerage firms other than this site owner
        are marked with the IDX/MLS logo. Information deemed reliable but is not guaranteed accurate by My
        Florida Regional MLS DBA Stellar MLS.
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM</p>


    <h3>Naples Board of Realtors (NAPLESMLS)</h3>
    <p>
        The information is being provided by Southwest Florida Multiple Listing Service. Information deemed
        reliable but not guaranteed. Information is provided for consumers' personal, non-commercial use, and
        may not be used for any purpose other than the identification of potential properties for purchase.
        Copyright 2022 Southwest Florida Multiple Listing Service. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>




    <h3>Navarre Area Board of Realtors INC MLS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image70.png')}}" alt="" />
    <p>
        Listing information provided in part by the NAMLS for personal, non-commercial use by viewers of this
        site and may not be reproduced or redistributed. All information is deemed reliable but not guaranteed.
        Copyright © NAMLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>New England Real Estate Network (NEREN)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image71.png')}}" alt="" />
    <p>
        The information is being provided by NEREN. This display of listings may or may not be the entire
        Compilation from the NEREN database, and NEREN does not guarantee the accuracy of such information.
        Information is provided for consumers' personal, non-commercial use, and may not be used for any purpose
        other than the identification of potential properties for purchase. Copyright 2022 NEREN. All Rights
        Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>New Jersey Multiple Listing Service, Inc. (NJMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image72.png')}}" alt="" />
    <p>
        The data relating to the real estate for sale on this web site comes in part from the Internet Data
        Exchange Program of the NJMLS. Real estate listings held by brokerage firms other than ARIS360 Homes are
        marked with the Internet Data Exchange logo and information about them includes the name of the listing
        brokers. Some properties listed with the participating brokers do not appear on this website at the
        request of the seller. Listings of brokers that do not participate in Internet Data Exchange do not
        appear on this website.
    </p>
    <p>All information deemed reliable but not guaranteed.</p>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image73.png')}}" alt="" />
    <p>
        The data relating to the real estate for sale and sold listing information on this web site comes from
        the New Jersey Multiple Listing Service, Inc. Virtual Office Website (VOW) program. This website may not
        include listings or property addresses of sellers who have directed their listing brokers to withhold
        their listing or their property address from display on the Internet. Sold listings may have been listed
        and/or sold by a real estate brokerage other than ARIS360 Homes.
        All information deemed reliable but not guaranteed. NJMLS makes no representation or warranty regarding
        the accuracy of the data. This data and information is protected under federal copyright laws which
        prohibit the unauthorized copying or alternation of all or any part of copyrighted materials, including
        certain compilations of data and information. Copyright violators may be subject to severe fines and
        penalties under federal law.
    </p>
    <p>Last date updated: 30.</p>
    <p>Source: New Jersey Multiple Listing Service, Inc.</p>
    <p>© 2022 New Jersey Multiple Listing Service, Inc. All rights reserved.</p>
    <p>Last updated: Nov 30, 2022 12:12 PM</p>



    <h3>New Mexico MLS (NMMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image74.png')}}" alt="" />
    <p>
        ©2022, NEW MEXICO MLS. All rights reserved. Listing information provided courtesy of the New Mexico
        Multiple Listing Service. IDX information is provided exclusively for consumers' personal,
        non-commercial use, and it may not be used for any purpose other than to identify prospective properties
        consumers may be interested in purchasing. The data is deemed reliable, but is not guaranteed accurate
        by the MLS. The offer of compensation for this listing is made only to participants of the New Mexico
        MLS where the listing is filed.
    </p>
    <p>
        Last updated: Nov 30, 2022 12:10 PM
    </p>



    <h3>New River Valley Association of REALTORS® (NRVMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image75.png')}}" alt="" />
    <p>
        Listing information provided in part by the New River Valley Association of Realtors for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © New River Valley Association of Realtors 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>New Smyrna Beach MLS (NSBMLS)</h3>
    <p>
        The data relating to real estate for sale/lease on this web site comes in part from the New Smyrna Beach
        Board of REALTORS® Multiple Listing Service (MLS) in which this real estate firm (Broker) participates.
        The properties displayed may not be all of the properties in the MLS's database, or all of the
        properties listed with the Brokers participating in the cooperative data exchange program. Properties
        listed by Brokers other than this Broker are marked with the MLS IDX logo. Information provided is
        thought to be reliable but is not guaranteed to be accurate; you are advised to verify facts that are
        important to you. No warranties, expressed or implied, are provided for the data herein or for their use
        or interpretation by the user. Federal law prohibits discrimination on the basis of race, color, sex,
        religion, handicap, familial status or national origin in the sale, rental or financing of housing
    </p>
    <p>Last updated: Nov 30, 2022 12:08 PM</p>



    <h3>New York MLS (OneKey)</h3>
    <p>
        Listing information provided in part by the OneKey MLS for personal, non-commercial use by viewers of
        this site and may not be reproduced or redistributed. All information is deemed reliable but not
        guaranteed. Copyright © OneKey MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>North Carolina Regional MLS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image76.png')}}" alt="" />
    <p>
        The data relating to real estate on this web site comes in part from the Internet Data Exchange program
        of North Carolina Regional MLS LLC, and is updated as of 30. All information is deemed reliable but not
        guaranteed and should be independently verified. All properties are subject to prior sale, change, or
        withdrawal. Neither listing broker(s) nor ARIS360 Homes shall be responsible for any typographical errors,
        misinformation, or misprints, and shall be held totally harmless from any damages ARIS360ing from reliance
        upon these data. © 2022 North Carolina Regional MLS LLC
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>North Florida MLS</h3>
    <p>
        Listing information provided in part by the Lake City Board of Realtors for personal, non-commercial use
        by viewers of this site and may not be reproduced or redistributed. All information is deemed reliable
        but not guaranteed. Copyright © Lake City Board of Realtors 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>


    <h3>North Santa Barbara County MLS</h3>
    <p>
        NSBCRMLS information is provided exclusively for consumers' personal, non-commercial use, it may not be
        used for any purpose other than to identify prospective properties consumers may be interested in
        purchasing. The data is deemed reliable but is not guaranteed accurate by the MLS.
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM</p>



    <h3>North Texas Real Estate Information Systems (NTREIS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image77.png')}}" style="display: inline-flex;" alt="" />
    <span>
        Listing information provided in part by the North Texas Real Estate Information Systems, Inc, for
        personal, non-commercial use by viewers of this site and may not be reproduced or redistributed. All
        information is deemed reliable but not guaranteed. Copyright © NTREIS 2022. All rights reserved
    </span>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>North West Illinois Alliance of Realtors (NWIAR) </h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image78.png')}}" style="display: inline-flex;" alt="" />
    <p>
        IDX information is provided exclusively for personal, non-commercial use, and may not be used for any
        purpose other than to identify prospective properties consumers may be interested in purchasing.
        Information is deemed reliable but not guaranteed. The listing broker’s offer of compensation is made
        only to participants of the MLS where the listing is filed.
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM</p>


    <h3>Northeast Central AOR RETS </h3>
    <p>
        Listing information provided in part by theNortheast Central Association of Realtors MLS for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Northeast Central Association of Realtors MLS 2022.
        All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>


    <h3>Northeast Florida MLS (NEFLMLS)</h3>
    <p>
        The information is being provided by Northeast Florida Multiple Listing Service, Inc. Information deemed
        reliable but not guaranteed. Information is provided for consumers' personal, non-commercial use, and
        may not be used for any purpose other than the identification of potential properties for purchase. ©
        2022 Northeast Florida Multiple Listing Service, Inc. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>


    <h3>Northeast Georgia Board of Realtors Inc MLS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image79.png')}}" alt="" />
    <p>
        Listing information provided in part by the NEGBOR for personal, non-commercial use by viewers of this
        site and may not be reproduced or redistributed. All information is deemed reliable but not guaranteed.
        Copyright © NEGBOR 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>


    <h3>Northeast Iowa Regional BOR</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image80.png')}}" alt="" />
    <p>
        IDX information is provided exclusively for consumers' personal, non-commercial use, that it may not be
        used for any purpose other than to identify prospective properties consumers may be interested in
        purchasing, and that the data is deemed reliable but is not guaranteed accurate by the MLS.\nThe listing
        broker’s offer of compensation is made only to participants of the MLS where the listing is
        filed.\nBased on information submitted to the MLS GRID as of 2022-06-08 04:16:49 PDT. All data is
        obtained from various sources and may not have been verified by broker or MLS GRID. Supplied Open House
        Information is subject to change without notice. All information should be independently reviewed and
        verified for accuracy. Properties may or may not be listed by the office/agent presenting the
        information. Some IDX listings have been excluded from this website. Prices displayed on all Sold
        listings are the Last Known Listing Price and may not be the actual selling price.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Northeast Louisiana Board of Realtors (NELABOR)</h3>
    <p>
        Listing information provided in part by the Northeast Louisiana Board of Realtors for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Northeast Louisiana Board of Realtors 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:08 PM</p>



    <h3>Northeast Oklahoma Real Estate Services</h3>
    <p>
        The information is being provided by Northeast Oklahoma Real Estate Services, Inc. Information deemed
        reliable but not guaranteed. Information is provided for consumers’ personal, non-commercial use, and
        may not be used for any purpose other than the identification of potential properties for purchase.
        Copyright 2022 Northeast Oklahoma Real Estate Services, Inc. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>


    <h3>Northern Arizona MLS (NAZMLS)</h3>
    <p>
        The content relating to real estate for sale in this Web site comes in part from the Internet Data
        exchange (“IDX”) program of the Northern Arizona Association of Realtors® MLS Real estate listings held
        by brokers other than [insert IDX Subscriber’s firm name here] are marked with the IDX Logo. This
        information is being provided for the consumers’ personal, non-commercial use and may not be used for
        any other purpose. All information subject to change and should be independently verified
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Northern Kentucky MLS</h3>
    <p>Information has not been verified, is not guaranteed and subject to change. Copyright 2022 NKAR. All
        rights resereved.</p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Northern Nevada Regional MLS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image81.png')}}" alt="" />
    <p>
        The information is being provided by Northern Nevada Regional MLS. Information deemed reliable but not
        guaranteed. Information is provided for consumers' personal, non-commercial use, and may not be used for
        any purpose other than the identification of potential properties for purchase. Copyright 2022 Northern
        Nevada Regional MLS. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM</p>



    <h3>Northern Ohio Regional MLS (Yes MLS)</h3>
    <p>
        The data relating to real estate for sale on this website comes in part from the Internet Data Exchange
        program of Yes-MLS. Real estate listings held by brokerage firms other than ARIS360 Homes are marked with
        the Internet Data Exchange logo and detailed information about them includes the name of the listing
        broker(s). Information deemed reliable but not guaranteed. Information is provided for consumers'
        personal, non-commercial use, and may not be used for any purpose other than the identification of
        potential properties for purchase. © 2022 Yes-MLS. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM</p>


    <h3>Northwest Arkansas MLS</h3>
    <p>
        Listing information provided in part by the Northwest Arkansas MLS for personal, non-commercial use by
        viewers of this site and may not be reproduced or redistributed. All information is deemed reliable but
        not guaranteed. Copyright © Northwest Arkansas MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Northwest Iowa Regional BOR</h3>
    <p>
        Listing information provided in part by the Northwest Iowa Regional BOR for personal, non-commercial use
        by viewers of this site and may not be reproduced or redistributed. All information is deemed reliable
        but not guaranteed. Copyright © Northwest Iowa Regional BOR 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>




    <h3>Northwest Multiple Listing Service (NWMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image82.png')}}" style="display: inline-flex;" alt="" />
    <span>
        Listing provided courtesy of Northwest MLS. The information contained in this listing has not been
        verified by ARIS360 Homes or the MLS and should be verified by the buyer.
    </span>

    <p>
        <strong>
            Claims of Copyright Infringement & Related Issues (17 USC § 512 et seq.).
        </strong>
    </p>

    <p>
        We respect the intellectual property rights of others. Anyone who believes their work has been
        reproduced in a way that constitutes copyright infringement may notify our agent by providing the
        following information:
    </p>


    <ol class="upper_alpha_list">
        <li>
            Identification of the copyrighted work that you claim has been infringed, or, if multiple
            copyrighted works at a single online site are covered by a single notification, a representative
            list of such works at the site;
        </li>
        <li>
            Identification of the material that you claim is infringing and needs to be removed, including a
            description of where it is located so that the copyright agent can locate it;
        </li>
        <li>
            Your address, telephone number, and, if available, e-mail address, so that the copyright agent may
            contact you about your complaint;
        </li>
        <li>
            A signed statement that the above information is accurate; that you have a good faith belief that
            the identified use of the material is not authorized by the copyright owner, its agent, or the law;
            and, under penalty of perjury, that you are the copyright owner or are authorized to act on the
            copyright owner's behalf in this situation.
        </li>
    </ol>

    <p>
        Upon obtaining such knowledge we will act expeditiously to remove, or disable access to, the material.
        Please be aware that there are substantial penalties for false claims.
    </p>

    <p>
        If a notice of copyright infringement has been wrongly filed against you, you may submit a counter
        notification to our agent. A valid counter notification is a written communication that incorporates the
        following elements:
    </p>

    <ol class="upper_alpha_list">
        <li>A physical or electronic signature of the poster;</li>
        <li>
            Identification of the material that has been removed or to which access has been disabled and the
            location at which the material appeared before it was removed or access to it was disabled;
        </li>
        <li>
            A statement under penalty of perjury that you have a good faith belief that the material was removed
            or disabled as a result of mistake or misidentification;
        </li>
        <li>
            Your name, address, and telephone number; a statement that you consent to the jurisdiction of
            federal district court for the judicial district in which your address is located, or if your
            address is outside of the U.S., for any judicial district in which the service provider may be
            found; and that you will accept service of process from the complainant.
        </li>
    </ol>

    <p>Notices of the foregoing copyright issues should be sent as follows:</p>


    <p><strong>By mail:</strong></p>

    <p>Northwest Multiple Listing Service </p>
    <p>11430 NE 120th Street </p>
    <p>Kirkland, WA 98034 </p>
    <p>United States </p>
    <p>Attention: DMCA Designated Agent</p>

    <p>
        <strong>By e-mail:</strong>
        <a href="mailto:copyright@nwmls.com">copyright@nwmls.com</a>
    </p>

    <p>
        If you give notice of copyright infringement by e-mail, an agent may begin investigating the alleged
        copyright infringement; however, we must receive your signed statement by mail or as an attachment to
        your e-mail before we are required to take any action.
    </p>
    <p>
        This information should not be construed as legal advice. We recommend you seek independent legal
        counsel before filing a notification or counter-notification. For further information about the DMCA,
        please visit the website of the United States Copyright Office at: <a
            href="https://www.copyright.gov/onlinesp/" target="_blank">http://www.copyright.gov/onlinesp.</a>
    </p>
    <p>
        Last updated: Nov 30, 2022 12:11 PM
    </p>



    <h3>Northwest Ohio Real Estate Information System, Inc</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image83.png')}}" alt="" />
    <p>
        The data relating to real estate for sale on this website comes in part from the Broker Reciprocity
        Program of the NORIS MLS. Real estate listings held by brokerage firms other than ARIS360 Homes are marked
        with the Broker Reciprocity logo and detailed information about them includes the name of the listing
        brokers. Data is deemed reliable but not guaranteed. Data last updated: 30. Copyright 2022 NORIS. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Odessa MLS</h3>
    <p>
        Listing information provided in part by the Odessa Board of Realtors for personal, non-commercial use by
        viewers of this site and may not be reproduced or redistributed. All information is deemed reliable but
        not guaranteed. Copyright © Odessa Board of Realtors 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Otero County Association of Realtors MLS (OCAOR)</h3>
    <p>
        Listing information provided in part by the Otero County Association of Realtors MLS for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Otero County Association of Realtors MLS 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Otsego-Delaware Board of Realtors MLS</h3>
    <p>
        Listing information provided in part by the Otsego-Delaware Board of Realtors MLS for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Otsego-Delaware Board of Realtors MLS 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 10:43 AM</p>



    <h3>Ottawa Real Estate Board</h3>
    <p>
        This information is deemed reliable but is not guaranteed accurate by OREB. The information provided
        herein shall only be used by consumers that have a bona fide interest in the purchase, sale, or lease of
        real estate and may not be used for any commercial purpose or any other purpose.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM</p>



    <h3>Ozark Gateway Association of Realtors </h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image84.png')}}" alt="" />
    <p>
        Listing information provided in part by the Ozark Gateway Association of Realtors MLS for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Ozark Gateway Association of Realtors MLS 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>


    <h3>Pacific Regional MLS </h3>
    <p>
        Listing information provided in part by the Pacific Regional MLS for personal, non-commercial use by
        viewers of this site and may not be reproduced or redistributed. All information is deemed reliable but
        not guaranteed. Copyright © Pacific Regional MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>


    <h3>Pampa Board of Realtors</h3>
    <p>
        Listing information provided in part by the Pampa Board of Realtors for personal, non-commercial use by
        viewers of this site and may not be reproduced or redistributed. All information is deemed reliable but
        not guaranteed. Copyright © Pampa Board of Realtors 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>


    <h3>Park City MLS (PCMLS)</h3>
    <p>
        The information is being provided by Park City Multiple Listing Service, Inc. Information deemed
        reliable but not guaranteed. Information is provided for consumers’ personal, non-commercial use, and
        may not be used for any purpose other than the identification of potential properties for purchase. The
        mulitple listing information is provided by the Park City MLS, Inc., from a copyrighted compilation of
        listings. The compilation of listings and each individual listings are Copyright 2022 Park City MLS,
        Inc. All Rights Reserved. Access to the multiple listing information through this website is made
        available by ARIS360 Homes as a member of the Park City Multiple Listing Service, Inc.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>




    <h3>Pensacola Association of Realtors MLS (PARMLS)</h3>
    <p>
        Copyright 2022 by the Multiple Listing Service of the Pensacola Association of REALTORS®. This
        information is believed to be accurate but is not guaranteed. Subject to verification by all parties.
        This data is copyrighted and may not be transmitted, retransmitted, copied, framed, repurposed, or
        altered in any way for any other site, individual and/or purpose without the express written permission
        of the Multiple Listing Service of the Pensacola Association of REALTORS®. Florida recognizes single and
        transaction agency relationships. Information Deemed Reliable But Not Guaranteed. Any use of search
        facilities of data on this site, other than by a consumer looking to purchase real estate, is
        prohibited.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Permian Basin Board of Realtors, Inc. MLS</h3>
    <p>
        Listing information provided in part by the Permian Basin Board of Realtors for personal, non-commercial
        use by viewers of this site and may not be reproduced or redistributed. All information is deemed
        reliable but not guaranteed. Copyright © Permian Basin Board of Realtors 2022. All rights reserved.
    </p>
    <p>
        Last updated: Nov 30, 2022 12:12 PM
    </p>


    <h3>Pike Wayne AOR MLS (PWMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image85.png')}}" alt="" />
    <p>
        Information provided by the Pike/Wayne Association of REALTORS® MLS. Information is for consumer’s
        personal noncommercial use, and may not be used for any purpose other than identifying properties which
        consumers may be interested in purchasing. Consult the specific municipality for permitted Zoning uses.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Plumas Association of Realtors (PAR)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image86.png')}}" alt="" />
    <p>
        Based on information from the Plumas Association of REALTORS® as of 30. All data, including all
        measurements and calculations of area, is obtained from various sources and has not been, and will not
        be, verified by broker or MLS. All information should be independently reviewed and verified for
        accuracy. Properties may or may not be listed by the office/agent presenting the information.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>


    <h3>Pocatello MLS</h3>
    <p>
        Listing information provided in part by the Greater Pocatello Association of Realtors for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Greater Pocatello Association of Realtors 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>




    <h3>Pocono Mountains AOR MLS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image87.png')}}" alt="" />
    <p>
        The data relating to real estate for sale on this web site includes listings held by MLS_IDX
        Participants of the Internet Data Exchange Program of the Multiple Lisitngs Service of the Pocono
        Mountain Association of Realtors®. Listings marked with the Internet Data Exchange logo are not
        necessarily the listings of the owner of this web site. All Listing data is the copyrighted property of
        the aforesaid Association and its MLS_IDS PArticipants with all rights reserved. The information
        contained herein is believed to be accurate, but no warranty as such is expressed of implied.
    </p>
    <p>
        Last updated: Nov 30, 2022 12:11 PM
    </p>



    <h3>Prescott Area Association of Realtors MLS</h3>
    <p>
        Listings on this page identified as belonging to another listing firm are based upon data obtained from
        the PAAR MLS, which data is copyrighted by the Prescott Area Association of REALTORS® but is not
        warranted.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM</p>


    <h3>Public Records</h3>
    <p>Information deemed reliable but not guaranteed. </p>
    <p>Last updated: undefined</p>


    <h3>Pueblo Association of Realtors</h3>
    <p>
        Listing information provided in part by the Pueblo Association of Realtors MLS for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Pueblo Association of Realtors MLS 2022. All rights
        reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Real Estate Board of Greater Vancouver (REBGV)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image88.png')}}" alt="" />
    <p>
        This representation is based in whole or in part on data generated by the Chilliwack & District Real
        Estate Board, Fraser Valley Real Estate Board or Real Estate Board of Greater Vancouver which assumes no
        responsibility for its accuracy. Listing information displayed on the MLS® VOW is deemed reliable but is
        not guaranteed accurate by the Board.
    </p>
    <p>
        Last updated: Nov 30, 2022 12:08 PM
    </p>


    <h3>Real Estate Board of New York (REBNY)</h3>
    <p>
        The information is being provided by REBNY Listing Service, Inc. Information deemed reliable but not
        guaranteed. Information is provided for consumers' personal, non-commercial use, and may not be used for
        any purpose other than the identification of potential properties for purchase. This information is not
        verified for authenticity or accuracy and is not guaranteed and may not reflect all real estate activity
        in the market. ©2022 REBNY Listing Service, Inc. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Real Estate Information Network Multiple Listing Service (REIN)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image89.png')}}" alt="" />
    <p>
        The listings data displayed on this medium comes in part from the Real Estate Information Network, Inc.
        (REIN) and has been authorized by participating listing Broker Members of REIN for display. REIN's
        listings are based upon Data submitted by its Broker Members, and REIN therefore makes no representation
        or warranty regarding the accuracy of the Data. All users of REIN's listings database should confirm the
        accuracy of the listing information directly with the listing agent. © (2022) REIN. REIN's listings Data
        and information is protected under federal copyright laws. Federal law prohibits, among other acts, the
        unauthorized copying or alteration of, or preparation of derivative works from, all or any part of
        copyrighted materials, including certain compilations of Data and information. COPYRIGHT VIOLATORS MAY
        BE SUBJECT TO SEVERE FINES AND PENALTIES UNDER FEDERAL LAW. REIN updates its listings on a daily basis.
        Data last updated within the hour.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM</p>



    <h3>Realcomp MLS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image90.png')}}" alt="" />
    <p>
        The accuracy of all information, regardless of source, is not guaranteed or warranted. All information
        should be independently verified. Any use of search facilities of data on the site, other than by a
        consumer looking to purchase real estate, is prohibited. IDX provided courtesy of Realcomp II Ltd., via
        ARIS360 Homes Corporation and REALCOMP, Copyright 2022 Realcomp II Ltd. Shareholders. REALTOR (R) licensed
        in the state of Michigan.
    </p>
    <p>Last updated: Nov 30, 2022 12:06 PM</p>



    <h3>REALTOR Association of Acadiana Multiple Listing Service (RAAMLS)</h3>
    <p>
        The data relating to real estate for sale on this web site comes in part from the IDX Program of the
        Realtor® Association of Acadiana's MLS. The information is provided exclusively for consumers' personal,
        non-commercial use and may not be used for any purpose other than to identify prospective properties
        consumers may be interested in purchasing. All information is deemed reliable but not guaranteed.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Realtor Association of Greater Fort Myers and the Beach, Inc (FORTMLS)</h3>
    <p>
        The information is being provided by Southwest Florida Multiple Listing Service. Information deemed
        reliable but not guaranteed. Information is provided for consumers' personal, non-commercial use, and
        may not be used for any purpose other than the identification of potential properties for purchase.
        Copyright 2022 Southwest Florida Multiple Listing Service. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM</p>


    <h3>Realtor Association of Southern Kentucky (RASKMLS)</h3>
    <p>
        Listing information provided in part by the Realtor Association of Southern Kentucky for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Realtor Association of Southern Kentucky 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>REALTOR Association of the Sioux Empire, Inc (RASE) </h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image91.png')}}" alt="" />
    <p>
        Listing information provided in part by the REALTOR Association of the Sioux Empire, Inc for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © REALTOR Association of the Sioux Empire, Inc 2022.
        All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Realtors Association of Indian River County (RAIRCMLS)</h3>
    <p>
        RAIRC MLS information is provided exclusively for consumers' personal, non-commercial use, it may not be
        used for any purpose other than to identifY prospective properties consumers may be interested in
        purchasing. The data is deemed reliable but is not guaranteed accurate by the MLS.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM</p>



    <h3>Realtors Association of Maui (RAM) MLS</h3>
    <p>
        The information is being provided by REALTORS® Association of Maui, Inc. Multiple Listing Service.
        Information deemed reliable but not guaranteed. Information is provided for consumers' personal,
        non-commercial use, and may not be used for any purpose other than the identification of potential
        properties for purchase. Copyright 2022 REALTORS® Association of Maui, Inc. Multiple Listing Service.
        All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>


    <h3>Realtors Association of Northeast Wisconsin (RANW)</h3>
    <p>
        The information is being provided by WIREX. Information deemed reliable but not guaranteed. Information
        is provided for consumers' personal, non-commercial use, and may not be used for any purpose other than
        the identification of potential properties for purchase. Copyright 2022 WIREX. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Realtors Association of Northwest Wisconsin (RANWW)</h3>
    <p>
        The information is being provided by WIREX. Information deemed reliable but not guaranteed. Information
        is provided for consumers' personal, non-commercial use, and may not be used for any purpose other than
        the identification of potential properties for purchase. Copyright 2022 WIREX. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM</p>



    <h3>Realtracs MLS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image92.png')}}" alt="" />
    <p>
        The information is being provided by MTRMLS, Inc. Properties marked with the MTRMLS logo are provided
        courtesy of the RealTracs Internet Data Exchange Program. Information Is Believed To Be Accurate But Not
        Guaranteed. Information is provided for consumers' personal, non-commercial use, and may not be used for
        any purpose other than the identification of potential properties for purchase. Copyright 2022 MTRMLS,
        Inc. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Regional Multiple Listing Service (RMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image93.png')}}" style="display: inline-flex;" alt="" />
    <strong>
        All information provided is deemed reliable but is not guaranteed and should be independently verified.
        The content relating to real estate for sale on this web site comes in part from the IDX program of the
        RMLS of Portland Oregon. Real estate listings held by brokerage firms other than ARIS360 Homes are marked
        with the RMLS logo and detailed information about these properties includes the names of the listing
        brokers. Copyright © 2022 RMLS, Portland, Oregon. Data Last Updated 30
    </strong>
    <p>Last updated: Nov 30, 2022 12:09 PM </p>



    <h3>Regional Multiple Listing Service of Florida (RMLSFL)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image34.png')}}" alt="" />
    <p>
        All listings featuring the BMLS logo are provided by BeachesMLS Inc. This information is not verified
        for authenticity or accuracy and is not guaranteed. Copyright 2022 Beaches Multiple Listing Service, Inc
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>




    <h3>ReSides(RSMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image94.png')}}" alt="" />
    <p>
        We do not attempt to independently verify the currency, completeness, accuracy or authenticity of the
        data contained herein. All area measurements and calculations are approximate and should be
        independently verified. Data may be subject to transcription and transmission errors. Accordingly, the
        data is provided on an “as is” “as available” basis only and may not reflect all real estate activity in
        the market. © 2022 REsides, Inc. All rights reserved. Certain information contained herein is derived
        from information, which is the licensed property of, and copyrighted by, REsides, Inc.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>




    <h3>Rhode Island MLS </h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image95.png')}}" alt="" />
    <p>
        The data relating to real estate for sale on this web site comes in part from the IDX Program of the
        State-Wide Multiple Listing Service, Inc. Real estate listings held by brokerage firms other than ARIS360
        Homes are marked with the MLS logo and detailed information about them includes the name of the listing
        brokers. Information deemed reliable but not guaranteed.
    </p>
    <p>© 2022 State-Wide MLS, Inc. All rights reserved. </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>




    <h3>Rio Grande Valley MLS</h3>
    <p>
        Listing information provided in part by the Rio Grande Valley MLS for personal, non-commercial use by
        viewers of this site and may not be reproduced or redistributed. All information is deemed reliable but
        not guaranteed. Copyright © Rio Grande Valley MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>RMLS Alliance, LLC (RMLSA)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image96.png')}}" alt="" />
    <p>
        Listing information provided in part by the RMLS Alliance for personal, non-commercial use by viewers of
        this site and may not be reproduced or redistributed. All information is deemed reliable but not
        guaranteed. Copyright © RMLS Alliance 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Royal Gorge AOR INC MLS</h3>
    <p>
        Listing information provided in part by the Royal Gorge Association of Realtors INC MLS for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Royal Gorge Association of Realtors INC MLS 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM</p>



    <h3>Ruidoso/Lincoln County AOR MLS (RLCAR)</h3>
    <p>
        Listing information provided in part by the Ruidoso/Lincoln County Association of Realtors MLS for
        personal, non-commercial use by viewers of this site and may not be reproduced or redistributed. All
        information is deemed reliable but not guaranteed. Copyright © Ruidoso/Lincoln County Association of
        Realtors MLS ${CURRENT_YEAR. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>San Angelo Association of Realtors MLS</h3>
    <p>
        Listing information provided in part by the San Angelo Association of Realtors for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © San Angelo Association of Realtors 2022. All rights
        reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>San Diego Multiple Listing Service, Inc. (SDMLS)</h3>
    <p>
        This information is deemed reliable but not guaranteed. You should rely on this information only to
        decide whether or not to further investigate a particular property. BEFORE MAKING ANY OTHER DECISION,
        YOU SHOULD PERSONALLY INVESTIGATE THE FACTS (e.g. square footage and lot size) with the assistance of an
        appropriate professional. You may use this information only to identify properties you may be interested
        in investigating further. All uses except for personal, non-commercial use in accordance with the
        foregoing purpose are prohibited. Redistribution or copying of this information, any photographs or
        video tours is strictly prohibited. This information is derived from the Internet Data Exchange (IDX)
        service provided by San Diego Multiple Listing Service, Inc. Displayed property listings may be held by
        a brokerage firm other than the broker and/or agent responsible for this display. The information and
        any photographs and video tours and the compilation from which they are derived is protected by
        copyright. Compilation © 2022 San Diego Multiple Listing Service, Inc.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>San Francisco Association of Realtors (SFARMLS)</h3>
    <p>
        © 2022 San Francisco Association of Realtors. All rights reserved. Listings on this page identified as
        belonging to another listing firm are based upon data obtained from the SFAR MLS, which data is
        copyrighted by the San Francisco Association of REALTORS©, but is not warranted. IDX information is
        provided exclusively for consumers' personal, non-commercial use and may not be used for any purpose
        other than to identify prospective properties consumers may be interested in purchasing. Listing Broker
        has attempted to offer accurate data, but buyers are advised to confirm all data provided.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>San Juan County Board of Realtors (SJCMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image97.png')}}" alt="" />
    <p>
        Listing information provided in part by the San Juan County Board of Realtors for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © San Juan County Board of Realtors 2022. All rights
        reserved. IDX Disclaimer: The data relating to real estate for sale in this web site comes in part from
        the Internet Data Exchange (IDX) program of SJCBR, Inc. Real estate listings held by brokers other than
        ARIS360 Homes Corporation are marked with the IDX Logo. All data in this web site is deemed reliable but is
        not guaranteed.
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM</p>



    <h3>Santa Barbara Multiple Listing Service (SBMLS)</h3>
    <p>
        All information is deemed reliable, but is not guaranteed. All properties are subject to prior sale,
        change or withdrawal. Neither listing broker(s) nor ARIS360 Homes shall be responsible for any
        typographical errors, misinformation, or misprints. 2013 Santa Barbara Multiple Listing Service. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Santa Fe Association of REALTORS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image98.png')}}" alt="" />
    <p>
        The data relating to real estate for sale in this web site comes in part from the Internet Data exchange
        ("IDX") program of SFAR MLS, Inc. Real estate listings held by brokers other than ARIS360 Homes are marked
        with the IDX Logo. All data in this web site is deemed reliable but is not guaranteed. Information is
        provided for consumers' personal, non-commercial use, and may not be used for any purpose other than the
        identification of potential properties for purchase. Copyright 2022 SFAR MLS, Inc. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Savannah Multi-List Corporation</h3>
    <p>
        The data relating to real estate for sale on this web site comes in part from the Internet Data Exchange
        program of the Savannah Multi-List Corporation. Real estate listings held by brokerage firms other than
        ARIS360 Homes are marked with the name of the listing brokers. ARIS360 Homes does not display the entire SMLC
        Internet Data Exchange database on this web site. The listings of some real estate brokerage firms have
        been excluded. The brokers providing this data believes them to be correct, but advises interested
        parties to confirm them before relying on them in a purchase decision. Copyright 2022 Savannah
        Multi-List Corporation. All rights reserved. Data last updated: 30.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Shasta Association of Realtors</h3>
    <p>
        Based on information from the Shasta Association of REALTORS® All data, including all measurements and
        calculations of area, is obtained from various sources and has not been, and will not be, verified by
        broker or MLS. All information should be independently reviewed and verified for accuracy. Properties
        may or may not be listed by the office/agent presenting the information. Copyright © Shasta Association
        of Realtors 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Shoals Area Association of Realtors MLS (SAARMLS)</h3>
    <p>
        The data relating to real estate on this website comes in part from the IDX Program of the Multiple
        Listing Service of the Shoals Area Association of REALTORS®, Inc. Real estate listings held by brokerage
        firms other than ARIS360 Homes Corporation are governed by the MLS Shoals Area Rules and Regulations, and
        detailed information about them includes the name of the listing companies. Such information being
        provided is for consumers’ personal, non-commercial use and may not be used for any purpose other than
        to identify prospective properties consumers may be interested in purchasing. All information provided
        is deemed reliable but is not guaranteed and should be independently verified. Listing Information
        Copyright 2022 Multiple Listing Service of the Shoals Area Association of REALTORS®, Inc.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Silver City Regional AoR MLS (SCRMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image99.png')}}" alt="" />
    <p>
        Listing information provided in part by the SCRMLS, Inc for personal, non-commercial use by viewers of
        this site and may not be reproduced or redistributed. All information is deemed reliable but not
        guaranteed. Copyright © SCRMLS, Inc 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>




    <h3>Smart MLS</h3>
    <p>
        The data relating to real estate for sale on this website appears in part through the SMARTMLS Internet
        Data Exchange program, a voluntary cooperative exchange of property listing data between licensed real
        estate brokerage firms, and is provided by SMARTMLS through a licensing agreement. Listing information
        is from various brokers who participate in the SMARTMLS IDX program and not all listings may be visible
        on the site. The property information being provided on or through the website is for the personal,
        non-commercial use of consumers and such information may not be used for any purpose other than to
        identify prospective properties consumers may be interested in purchasing. Some properties which appear
        for sale on the website may no longer be available because they are for instance, under contract, sold
        or are no longer being offered for sale.  Property information displayed is deemed reliable but is not
        guaranteed. Copyright 2022 SmartMLS, Inc.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM</p>




    <h3>Snake River Regional MLS</h3>
    <p>
        Listing information provided in part by the Snake River MLS for personal, non-commercial use by viewers
        of this site and may not be reproduced or redistributed. All information is deemed reliable but not
        guaranteed. Copyright © Snake River MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>




    <h3>South Cenral Kentucky Association of Realtors, Inc (SCKMLSKY)</h3>
    <p>
        Listing information provided in part by the South Central Kentucky Association of Realtors for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © South Central Kentucky Association of Realtors 2022.
        All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM</p>



    <h3>South Central Association of Realtors MLS (SCAR)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image100.png')}}" alt="" />
    <p>
        Listing information provided in part by the South Central Association of Realtors for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © South Central Association of Realtors 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>South Central Kansas MLS</h3>
    <p>
        This information is not verified for authenticity or accuracy, is not guaranteed and may not reflect all
        real estate activity in the market. © 1993-2022 South Central Kansas MLS. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>




    <h3>South Central Wisconsin Multiple Listing Service (SCWMLS)</h3>
    <p>
        The information is being provided by WIREX. Information deemed reliable but not guaranteed. Information
        is provided for consumers' personal, non-commercial use, and may not be used for any purpose other than
        the identification of potential properties for purchase. Copyright 2022 WIREX. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>




    <h3>South Jersey Shore Regional MLS (SJSRMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image83.png')}}" alt="" />
    <p>
        The information is being provided by South Jersey Shore Regional MLS. Information deemed reliable but
        not guaranteed. Information is provided for consumers' personal, non-commercial use, and may not be used
        for any purpose other than the identification of potential properties for purchase. Copyright 2014 South
        Jersey Shore Regional MLS. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>




    <h3>South Padre Island Board of Realtors</h3>
    <p>
        Listing information provided in part by the South Padre Island Board of Realtors for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © South Padre Island Board of Realtors 2022. All rights
        reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM</p>



    <h3>Southeast Alabama Multiple Listing Service</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image101.png')}}" alt="" />
    <p>
        Listing information provided in part by the Southeast Alabama MLS for personal, non-commercial use by
        viewers of this site and may not be reproduced or redistributed. All information is deemed reliable but
        not guaranteed. Copyright © Southeast Alabama MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Southeast Kansas MLS (SKSMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image102.png')}}" alt="" />
    <p>
        Listing information provided in part by the Southeast Kansas MLS for personal, non-commercial use by
        viewers of this site and may not be reproduced or redistributed. All information is deemed reliable but
        not guaranteed. Copyright © Southeast Kansas MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:08 PM</p>




    <h3>Southern Indiana Realtors Association</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image103.png')}}" alt="" />
    <p>
        Listing information provided in part by the SIRA MLS for personal, non-commercial use by viewers of this
        site and may not be reproduced or redistributed. Real estate listings held by brokerage firms other than
        ARIS360 Homes, are indicated by detailed information about them such as the name of the listing firms. All
        information is deemed reliable but not guaranteed. Copyright © SIRA MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>




    <h3>Southern Missouri Regional MLS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image104.png')}}" alt="" />
    <p>
        The data relating to real estate for sale on this web page comes in part from the Internet Data Exchange
        (IDX) of the Southern Missouri Regional MLS, LLC, Inc. Real estate listings held by Brokerage firms
        other than ARIS360 Homes Corporation are marked with the IDX logo and detailed information about them
        includes the name of the listing Brokers. The information being provided is for consumers’ personal,
        noncommercial use and may not be used for any purpose other than to identify prospective properties
        consumers may be interested in purchasing. The information being provided is not guaranteed, and all
        information should be verified by the consumer. Any representation that a web site contains all listings
        shall only mean that the website contains all listing available to the public through the IDX data feed.
        There may be other properties offered through a REALTOR® that have not been displayed on this site. ©
        2022 Southern Missouri Regional MLS, LLC. All rights reserved.
    </p>
    <p>
        SOMO MLS respects the intellectual property rights of others and expects you to do the same. Per the
        DMCA, SOMO MLS will respond expeditiously to claims of copyright infringement on the Site if submitted
        to SOMO MLS's Copyright Agent as described below. Upon receipt of a notice alleging copyright
        infringement, SOMO MLS will take whatever action it deems appropriate within its sole discretion,
        including removal of the allegedly infringing materials. If you believe that your intellectual property
        rights have been violated by SOMO MLS or by a third party who has uploaded materials to the Site, please
        provide the following information to SOMO MLS's designated Copyright Agent listed below:
    </p>


    <ol class="upper_alpha_list">
        <li>
            A description of the copyrighted work or other intellectual property that you claim has been
            infringed;
        </li>
        <li>
            A description of where the material that you claim is infringing is located on the Site;
        </li>
        <li>
            An address, telephone number, and e-mail address where SOMO MLS can contact you and, if different,
            an e-mail address where the alleged infringing party, if not SOMO MLS, can contact you;
        </li>
        <li>
            A statement that you have a good-faith belief that the use is not authorized by the copyright owner
            or other intellectual property rights owner, by its agent, or by law;
        </li>
        <li>
            A statement by you under penalty of perjury that the information in your notice is accurate and that
            you are the copyright or intellectual property owner or are authorized to act on the owner's behalf;
        </li>
        <li>
            Your electronic or physical signature.
        </li>
    </ol>

    <p>
        SOMO MLS may request additional information before removing any allegedly infringing material. In the
        event SOMO MLS removes the allegedly infringing materials, SOMO MLS will immediately notify the person
        responsible for posting such materials that SOMO MLS removed or disabled access to the materials. SOMO
        MLS may also provide the responsible person with your e-mail address so that the person may respond to
        your allegations. SOMO MLS reserves the right to terminate, limit or suspend any user's access to the
        Site in the event of repeated infringing activity. If you believe that a user of this Site is a repeat
        infringer, please follow the above instructions to contact SOMO MLS's Copyright Agent. Please include
        sufficient information to assist SOMO MLS in determining that the user repeatedly engaged in infringing
        activity. SOMO MLS registered a designated agent with the Copyright Office pursuant to 17 U.S.C. 512(c).
        SOMO MLS's designated Copyright Agent is: Jeffrey Kester 1310 Primrose, Springfield, MO 65804, Phone:
        417-883 1226, Email: jeff@gsbor.com
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>




    <h3>Southwest Iowa MLS</h3>
    <p>
        Listing information provided in part by the Southwest Iowa MLS for personal, non-commercial use by
        viewers of this site and may not be reproduced or redistributed. All information is deemed reliable but
        not guaranteed. Copyright © Southwest Iowa MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>


    <h3>Southwest MLS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image105.png')}}" alt="" />
    <p>
        Some of the information contained herein has been provided by SWMLS, Inc. This information is from
        sources deemed reliable but not guaranteed by SWMLS, Inc. The information is for consumers' personal,
        non-commercial use and may not be used for any purpose other than identifying properties which consumers
        may be interested in purchasing.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>


    <h3>Space Coast MLS (SCMLS)</h3>
    <p>
        © 2022 Space Coast Association REALTORS®. All rights reserved. The data relating to real estate shown on
        this website comes in part from the Internet Data Exchange (IDX) program of Space Coast Association of
        REALTORS®, Inc. IDX information is provided exclusively for consumers' personal, non-commercial use and
        may not be used for any purpose other than to identify prospective properties consumers may be
        interested in purchasing. All data is deemed reliable but is not guaranteed accurate.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>


    <h3>Spartanburg MLS (SPMLS)</h3>
    <p>
        SPMLS information is provided exclusively for consumers' personal, non-commercial use. It may not be
        used for any purpose other than to identify prospective properties consumers may be interested in
        purchasing. The data is deemed reliable but is not guaranteed accurate by the MLS.
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM</p>




    <h3>Spokane MLS</h3>
    <p>
        IDX information is provided exclusively for consumers' personal, non-commercial use, and may not be used
        for any purpose other than to identify prospective properties consumers may be interested in purchasing,
        and that the data is deemed reliable but is not guaranteed accurate by the Spokane Association of
        Realtors MLS.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>St Augustine & St Johns County MLS</h3>
    <p>
        IDX information is provided exclusively for consumers' personal, non-commercial use, and may not be used
        for any purpose other than to identify prospective properties consumers may be interested in purchasing,
        and that the data is deemed reliable but is not guaranteed accurate by the St Augustine & St John's MLS.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Staten Island Board of Realtors</h3>
    <p>
        The information is being provided by the Staten Island Board of Realtors. Information deemed reliable
        but not guaranteed. Information is provided for consumers' personal, non-commercial use, and may not be
        used for any purpose other than the identification of potential properties for purchase. Copyright 2022
        Staten Island Board of Realtors. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM</p>



    <h3>Summit Association of Realtors (SAR)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image106.png')}}" alt="" />
    <p>
        © 2022 Summit MLS, Inc., a wholly owned subsidiary of Summit Association of REALTORS®. All rights
        reserved. The information being provided is for the consumer's non-commercial, personal use and may not
        be used for any purpose other than to identify prospective properties consumer may be interested in
        purchasing. The information provided is not guaranteed and should be independently verified. You may not
        reprint or redistribute the information, in whole or in part, without the expressed written consent of
        Summit Association of REALTORS®.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Sun Valley BOR</h3>
    <p>
        Listing information provided in part by the Sun Valley BoR MLS for personal, non-commercial use by
        viewers of this site and may not be reproduced or redistributed. All information is deemed reliable but
        not guaranteed. Copyright © Sun Valley BoR MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Sunflower MLS</h3>
    <p>
        Listing information provided in part by the Sunflower MLS for personal, non-commercial use by viewers of
        this site and may not be reproduced or redistributed. All information is deemed reliable but not
        guaranteed. Copyright © Sunflower MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:09 PM</p>



    <h3>Superior Area Association of Realtors (SAAR)</h3>
    <p>
        The information is being provided by WIREX. Information deemed reliable but not guaranteed. Information
        is provided for consumers' personal, non-commercial use, and may not be used for any purpose other than
        the identification of potential properties for purchase. Copyright 2022 WIREX. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>SW Michigan MLS</h3>
    <p>
        The information is being provided by MichRIC, LLC. Information deemed reliable but not guaranteed.
        Information is provided for consumers' personal, non-commercial use, and may not be used for any purpose
        other than the identification of potential properties for purchase. Copyright 2022 MichRIC, LLC. All
        Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Taos County Association of Realtors MLS (TCAR)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image107.png')}}" alt="" />
    <p>
        The data relating to real estate for sale in this web site come in part from the Internet Data exchange
        ("IDX") program of TCAR MLS, Inc. Real estate listings held by other brokers are marked with the IDX
        Logo. All data in this web site is deemed reliable but is not guaranteed.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>




    <h3>Tehama County AOR MLS (TCAOR)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image108.png')}}" alt="" />
    <p>
        Based on information from the Tehama County Association of REALTORS® as of 30. All data, including all
        measurements and calculations of area, is obtained from various sources and has not been, and will not
        be, verified by broker or MLS. All information should be independently reviewed and verified for
        accuracy. Properties may or may not be listed by the office/agent presenting the information.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Terre Haute Area Association of Realtors, Inc.</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image109.png')}}" alt="" />
    <p>
        Listing information provided in part by the Terre Haute Area Association of Realtors for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Terre Haute Area Association of Realtors 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM</p>



    <h3>Toronto Real Estate Board</h3>
    <p>
        Information is deemed reliable but is not guaranteed acurate by TREB. The information provided herein
        must only be used by consumers that have a bona fine interest in the purchase, sale, or lease of real
        estate and may not be used for any commercial purpose or any other purpose.
    </p>
    <p>Last updated: Nov 30, 2022 11:43 AM</p>



    <h3>Triad MLS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image110.png')}}" alt="" />
    <p>
        The information is being provided by Triad Multiple Listing Service, Inc. Information deemed reliable
        but not guaranteed. Information is provided for consumers' personal, non-commercial use, and may not be
        used for any purpose other than the identification of potential properties for purchase. Copyright 2022
        Triad Multiple Listing Service, Inc. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Triangle Multiple Listing Service (TMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image111.png')}}" alt="" />
    <p>
        <span>© 2022 Triangle MLS, Inc. of North Carolina. All rights reserved. The data relating to real estate
            for
            sale on this web site comes from the Internet Data Exchange™ Program of the Triangle MLS, Inc. of
            Cary.
            Real estate listings held by brokerage firms are marked with the Internet Data Exchange™ logo or the
            Internet Data Exchange™ thumbnail logo (</span>
        <img src="{{asset('public/assets/images/homes_terms_of_use/image112.png')}}" style="display: inline-flex;" alt="" />
        <span>) and detailed information about them includes the name of the
            listing firms.</span>
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>




    <h3>Tucson MLS (MLSSAZ)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image113.png')}}" alt="" />
    <p>
        The data relating to real estate listings on this website comes in part from the Internet Data Exchange
        (IDX) program of Multiple Listing Service of Southern Arizona. IDX information is provided exclusively
        for consumers' personal, non-commercial use and may not be used for any purpose other than to identify
        prospective properties consumers may be interested in purchasing. Listings provided by brokerages other
        than ARIS360 Homes are identified with the MLSSAZ IDX Logo. All Information Is Deemed Reliable But Is Not
        Guaranteed Accurate. Listing information Copyright 2022 MLS of Southern Arizona. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Tulare County Association of Realtors</h3>
    <p>
        Based on information from the Tulare County Association of REALTORS® as of 2022. All data, including all
        measurements and calculations of area, is obtained from various sources and has not been, and will not
        be, verified by broker or MLS. All information should be independently reviewed and verified for
        accuracy. Properties may or may not be listed by the office/agent presenting the information.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Upstate New York Real Estate Information Service (UNYREIS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image114.png')}}" alt="" />
    <p>
        Information is provided for consumers' personal, non-commercial use, and may not be used for any purpose
        other than the identification of potential properties for purchase. All information deemed reliable but
        not guaranteed and should be independently verified. All properties are subject to prior sale, change or
        withdrawal. Neither the listing broker(s) nor ARIS360 Homes shall be responsible for any typographical
        errors, misinformation, misprints, and shall be held totally harmless. © 2022 GENRIS. All rights
        reserved
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Vail Board of Realtors(vmls)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image114.png')}}" alt="" />
    <p>
        The data relating to the real estate for sale on this website comes in part from the Internet Data
        Exchange program of the Vail Multi-List Service, Inc. The information displayed herein was derived from
        sources believed to be accurate but has not been verified by VMLS. Buyers are cautioned to verify all
        information to their own satisfaction. This information is exclusively for viewers’ personal, non-
        commercial use. Any republication or reproduction of the information herein without the express
        permission of the VMLS is strictly prohibited. Copyright ©2022 Vail Multi List, Inc. (VMLS).
    </p>
    <p>Last updated: Nov 30, 2022 12:12 PM</p>



    <h3>Valley MLS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image115.png')}}" alt="" />
    <p>
        The information provided is exclusively for consumers' personal, non-commercial use, and may not be used
        for any purpose other than to identify prospective properties consumers may be interested in purchasing.
        All information provided is deemed reliable but is not guaranteed and should be independently verified.
        © 2018 Valley MLS, Inc.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Walker County Area MLS</h3>
    <p>
        Listing information provided in part by the Walker Area Association of Realtors for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Walker Area Association of Realtors 2022. All rights
        reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Wasatch Front Regional Multiple Listing Service, Inc. (WFRMLS)</h3>
    <p>
        The information provided is for consumers' personal, non-commercial use and may not be used for any
        purpose other than to identify prospective properties consumers may be interested in purchasing.
        Information deemed reliable but not guaranteed accurate. Buyer to verify all information. The multiple
        listing information is provided by Wasatch Front Regional Multiple Listing Service, Inc. from a
        copyrighted compilation of listings. The compilation of listings and each individual listing are
        Copyright 2022 Wasatch Front Regional Multiple Listing Service, Inc., All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Water Wonderland MLS (WWMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image116.png')}}" alt="" />
    <p>
        Listing information provided in part by the Water Wonderland MLS for personal, non-commercial use by
        viewers of this site and may not be reproduced or redistributed. Real estate listings held by brokerage
        firms other than ARIS360 Homes Corporation are marked with the WWLX logo and the detailed information about
        said listing includes the listing office. All information is deemed reliable but not guaranteed.
        Copyright © Water Wonderland MLS 30. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>




    <h3>West Alabama MLS</h3>
    <p>
        Listing information provided in part by the West Alabama MLS for personal, non-commercial use by viewers
        of this site and may not be reproduced or redistributed. All information is deemed reliable but not
        guaranteed. Copyright © West Alabama MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>West Branch Valley BOR MLS (WBVAR)</h3>
    <p>
        Listing information provided in part by the West Branch Board of Realtors MLS for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © West Branch Board of Realtors MLS 2022. All rights
        reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>West Central Missouri Association of REALTORS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image117.png')}}" alt="" />
    <p>
        Listing information provided in part by the West Central Association of Realtors MLS for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © West Central Association of Realtors MLS 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>West Penn MLS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image118.png')}}" alt="" />
    <p>
        The information is being provided by West Penn Multi-List, Inc. Information deemed reliable, but not
        guaranteed. Information is provided for consumers' personal, non-commercial use, and may not be used for
        any purpose other than the identification of potential properties for purchase. Copyright 2022 West Penn
        Multi-List, Inc.. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>




    <h3>Western Arizona Realtor Data Exchange</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image114.png')}}" alt="" />
    <p>
        Listing information provided in part by the Western Arizona Realtor Data Exchange (Wardex) for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Western Arizona Realtor Data Exchange (Wardex) 2022.
        All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>


    <h3>Western Kentucky Regional (WKRMLS)</h3>
    <p>
        Listing information provided in part by the Western Kentucky Regional Board of Realtors for personal,
        non-commercial use by viewers of this site and may not be reproduced or redistributed. All information
        is deemed reliable but not guaranteed. Copyright © Western Kentucky Regional Board of Realtors 2022. All
        rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Western New York Real Estate Information Services, LLC (WNYREIS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image114.png')}}" alt="" />
    <p>
        Information is provided for consumers' personal, non-commercial use, and may not be used for any purpose
        other than the identification of potential properties for purchase. All information deemed reliable but
        not guaranteed and should be independently verified. All properties are subject to prior sale, change or
        withdrawal. Neither the listing broker(s) nor ARIS360 Homes shall be responsible for any typographical
        errors, misinformation, misprints, and shall be held totally harmless. © 2022 WNYREIS. All rights
        reserved
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Western Regional Info Systems & Technology Inc.</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image119.png')}}" alt="" />
    <p>
        Listing information provided in part by the Western Regional Info Systems & Technology Inc. for
        personal, non-commercial use by viewers of this site and may not be reproduced or redistributed. All
        information is deemed reliable but not guaranteed. Copyright © Western Regional Info Systems &
        Technology Inc. 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Western Upstate MLS</h3>
    <p>
        This information is deemed reliable, but not guaranteed. Neither, the Western Upstate Association of
        REALTORS®, Inc. or Western Upstate Multiple Listing Service of South Carolina Inc., nor the listing
        broker, nor their agents or subagents are responsible for the accuracy of the information. The buyer is
        responsible for verifying all information. This information is provided by the Western Upstate
        Association of REALTORS®, Inc. and Western Upstate Multiple Listing Service of South Carolina, Inc. for
        use by its members and is not intended for the use for any other purpose. Information is provided for
        consumers' personal, non-commercial use, and may not be used for any purpose other than the
        identification of potential properties for purchase. The data relating to real estate for sale on this
        Web site comes in part from the Broker Reciprocity Program of the Western Upstate Association of
        REALTORS®, Inc. and the Western Upstate Multiple Listing Service, Inc.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Western Wisconsin Realtors Association (WWRA)</h3>
    <p>
        The information is being provided by WIREX. Information deemed reliable but not guaranteed. Information
        is provided for consumers' personal, non-commercial use, and may not be used for any purpose other than
        the identification of potential properties for purchase. Copyright 2022 WIREX. All Rights Reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>White Mountain MLS (WMMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image120.png')}}" alt="" />
    <p>
        Listing information provided in part by the White Mountain MLS for personal, non-commercial use by
        viewers of this site and may not be reproduced or redistributed. All information is deemed reliable but
        not guaranteed. Copyright © White Mountain MLS 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>


    <h3>Willamette Valley Multiple Listing Service (WVMLS)</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image121.png')}}" alt="" />
    <p>
        Copyright 2022 Willamette Valley MLS, All Rights Reserved. Information Deemed Reliable But Not
        Guaranteed.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Williamsburg Area Association of Realtors</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image122.png')}}" alt="" />
    <p>
        Listing information provided in part by the WMLS for personal, non-commercial use by viewers of this
        site and may not be reproduced or redistributed. All information is deemed reliable but not guaranteed.
        Copyright © 2022 WMLS. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:11 PM</p>



    <h3>Yakima AOR MLS </h3>
    <p>
        Listing information provided in part by the MLS of Yakima for personal, non-commercial use by viewers of
        this site and may not be reproduced or redistributed. All information is deemed reliable but not
        guaranteed. Copyright © MLS of Yakima 2022. All rights reserved.
    </p>
    <p>Last updated: Nov 30, 2022 12:10 PM</p>



    <h3>Yuma Association of Realtors INC MLS</h3>
    <img src="{{asset('public/assets/images/homes_terms_of_use/image123.png')}}" alt="" />
    <p>
        Listing information provided in part by the Yuma Association of Realtors for personal, non-commercial
        use by viewers of this site and may not be reproduced or redistributed. All information is deemed
        reliable but not guaranteed. Copyright © Yuma Association of Realtors 2022. All rights reserved.
    </p>

    <p>Last updated: Nov 30, 2022 12:10 PM</p>

    <p>2.10.142. For Residents of Canada:</p>

    <p>
        This Site contains Postal Code (official mark) Data copied under license from Canada Post Corporation.
        The Canada Post Corporation file from which this data was copied is dated November 2018.
    </p>

    <p>
        Ce Site contient des données qui ont été reproduites avec l'autorisation de la Société canadienne des
        postes. Le fichier de la Société canadienne des postes d'où proviennent ces données est daté du Novembre
        2018.
    </p>

    <p>
        REALTOR®, REALTORS®, and the REALTOR® logo are certification marks that are owned by REALTOR® Canada
        Inc. and licensed exclusively to The Canadian Real Estate Association (CREA). These certification marks
        identify real estate professionals who are members of CREA and who must abide by CREA's By-Laws, Rules,
        and the REALTOR® Code. The MLS® trademark and the MLS® logo are owned by CREA and identify the quality
        of services provided by real estate professionals who are members of CREA.
    </p>

    <p>
        The information contained on this Site is based in whole or in part on information that is provided by
        members of The Canadian Real Estate Association, who are responsible for its accuracy. CREA reproduces
        and distributes this information as a service for its members and assumes no responsibility for its
        accuracy.
    </p>

    <p>
        The Site is operated by a brokerage or salesperson who is a member of The Canadian Real Estate
        Association.
    </p>

    <p>
        The listing content on this Site is protected by copyright and other laws, and is intended solely for
        the private, non-commercial use by individuals. Any other reproduction, distribution or use of the
        content, in whole or in part, is specifically forbidden. The prohibited uses include commercial use,
        "screen scraping", "database scraping", and any other activity intended to collect, store, reorganize or
        manipulate data on the pages produced by or displayed on this Site.
    </p>

    <p>
        The Sites contain information adapted from Statistics Canada (2016 Census), and such information is
        reproduced and distributed on an "as is" basis with the permission of Statistics Canada. This does not
        constitute an endorsement by Statistics Canada of the Sites.
    </p>

    <p>2.10.142.1. Real Estate Board of Greater Vancouver</p>

    <p>
        This information is deemed reliable, but not guaranteed. You agree that you have received, read, and
        understood the brochure published by the British Columbia Real Estate Association entitled
        <a href="{{url('homes-privacy-notice')}}" target="_blank">Privacy Notice</a> and Consent.
    </p>



    <h2>ADDENDUM: ARIS360 HOMES MORTGAGE SERVICES</h2>

    <p>
        Welcome! This ARIS360 Homes Mortgage Services Addendum <strong>("Mortgage Services Addendum")</strong> is
        hereby
        incorporated into and is a part of the overall Agreement between you and the ARIS360 Homes Companies. The
        terms of this Mortgage Services Addendum supplement the terms of the Agreement with respect to the ARIS360
        Homes Mortgage Services (defined below) and in the event any term of this Mortgage Services Addendum
        directly conflicts with a term of the Agreement, the term contained in this Mortgage Services Addendum
        will control.
    </p>
    <p>
        The ARIS360 Homes Mortgage Services are offered by ARIS360 Homes Mortgage and by accessing, downloading, or
        using any portion of the ARIS360 Homes Mortgage Services, you signify that you accept the terms of this
        Mortgage Services Addendum as between you and ARIS360 Homes Mortgage.
    </p>

    <ol class="number_list">
        <li>
            <h5>DEFINITIONS</h5>
            <ol class="roman_list">
                <li>
                    <strong>"ARIS360 Homes Mortgage"</strong> means ARIS360 Homes Mortgage, LLC.
                </li>
                <li>
                    <strong>"ARIS360 Homes Mortgage Services"</strong> means the ARIS360 Homes Mortgage Sites and the
                    loan services and
                    any other services provided by or for ARIS360 Homes Mortgage through the ARIS360 Homes Mortgage
                    Sites, that are not otherwise covered by the Financial Agreements.
                </li>
                <li>
                    <strong>"ARIS360 Homes Mortgage Sites"</strong> means ARIS360 HomesMortgage.com and other websites
                    and mobile
                    applications through which ARIS360 Homes Mortgage may offer services.
                </li>
            </ol>
            <p>
                All other capitalized terms will have the meaning as provided elsewhere in this Mortgage
                Services Addendum or in the Agreement.
            </p>
        </li>
        <li>
            <h5>ARIS360 HOMES MORTGAGE SERVICES TERMS</h5>
            <ol class="roman_list">
                <li>
                    <strong>
                        You are required to enter into a separate agreement or agreements to procure a mortgage
                        or other loan from ARIS360 Homes Mortgage (the "Financial Agreements"). The Financial
                        Agreements are not covered here or by the Agreement.
                    </strong>
                </li>
                <li>
                    Who May Use the ARIS360 Homes Mortgage Services. To use the ARIS360 Homes Mortgage Services, you
                    must be a resident of the United States.
                </li>
                <li>
                    Provision of Services. To access certain features and tools offered by ARIS360 Homes Mortgage
                    or its service providers in connection with the ARIS360 Homes Mortgage Services, you may need
                    to register with ARIS360 Homes Mortgage or its service providers. You agree to provide
                    accurate, true, current, and complete information to ARIS360 Homes Mortgage. The information
                    you provide in connection with the ARIS360 Homes Mortgage Services will be protected as
                    described in our <a href="{{url('homes-privacy-notice')}}"
                        target="_blank">Privacy Notice</a> and <a
                        href="{{url('homes-privacy-notice')}}" target="_blank">Consumer
                        Privacy Notice</a>. You are responsible for all
                    activities related to the ARIS360 Homes Mortgage Services that occur through your account and
                    password. You agree to keep your password confidential, not use others' accounts, nor permit
                    others to use your account. We reserve the right to terminate accounts in our sole
                    discretion.
                </li>
                <li>
                    General and Legal Notices. You may contact us at <a
                        href="mailto:info@arishomesmortgage.com">info@Aris Homesmortgage.com</a> or via mail or
                    courier to our current address as indicated on the <a
                        href="https://mortgage.redfin.com/mortgage/loanApplication?" target="_blank">ARIS360 Homes
                        Mortgage Sites.</a>
                </li>
            </ol>
        </li>
    </ol>



    <h2>ADDENDUM: TITLE FORWARD SERVICES</h2>
    <p>
        Welcome! This Title Forward Services Addendum <strong>("Title Forward Services Addendum")</strong> is
        hereby incorporated
        into and is a part of the overall Agreement between you and the ARIS360 Homes Companies. The terms of this
        Title Forward Services Addendum supplement the terms of the Agreement with respect to the Title Forward
        Services (defined below) and in the event any term of this Title Forward Services Addendum directly
        conflicts with a term of the Agreement, the term contained in this Title Forward Services Addendum will
        control.
    </p>
    <p>
        The Title Forward Services are offered by Title Forward and by accessing, downloading, or using any
        portion of the Title Forward Services, you signify that you accept the terms of this Title Forward
        Services Addendum as between you and Title Forward.
    </p>

    <ol class="number_list">
        <li>
            <h5>DEFINITIONS</h5>
            <ol class="roman_list">
                <li><strong>"ClosingCorp"</strong> means ClosingCorp Inc.</li>
                <li>
                    <strong>"DART Service"</strong> means the quotation calculator on the Title Forward Site at
                    titleforward.com/get-a-quote that provides recording fee and transfer tax estimates based on
                    data supplied by ClosingCorp, along with all content contained on, or accessible via, the
                    Title Forward Sites.
                </li>
                <li>
                    <strong>"Title Forward"</strong> means Forward Settlement Solutions (dba Title Forward).
                </li>
                <li>
                    <strong>"Title Forward Services"</strong> means the Title Forward Sites and the services
                    provided through the
                    Title Forward Sites and that is not covered by the Insurance and Title Agreements.
                </li>
                <li>
                    <p>
                        <strong>"Title Forward Sites"</strong> means TitleForward.com and other websites and
                        mobile applications
                        through which Title Forward may offer services.
                    </p>

                    <p>
                        All other capitalized terms will have the meaning as provided elsewhere in this Title
                        Forward Services Addendum or in the Agreement.
                    </p>
                </li>
            </ol>
        </li>
        <li>
            <h5>TITLE FORWARD SERVICES TERMS</h5>
            <ol class="roman_list">
                <li>
                    <strong>
                        You are required to enter into a separate agreement with Title Forward to procure title
                        insurance from Title Forward or have Title Forward act as a title company for you (the
                        "Insurance and Title Agreements"). The Insurance and Title Agreements are not covered
                        here or by the Agreement.
                    </strong>
                </li>
                <li>
                    Who May Use the Title Forward Services. To use the Title Forward Services, you must be a
                    resident of the United States.
                </li>
                <li>
                    Provision of Services. To access certain features and tools offered by Title Forward or its
                    service providers in connection with the Title Forward Services, you may need to register
                    with Title Forward or its service providers. You agree to provide accurate, true, current,
                    and complete information to Title Forward. The information you provide in connection with
                    the Title Forward Services will be protected as described in our <a
                        href="{{url('homes-privacy-notice')}}" target="_blank">Privacy Notice</a> .
                    You are
                    responsible for all activities related to the Title Forward Services that occur through your
                    account and password. You agree to keep your password confidential, not use others'
                    accounts, nor permit others to use your account. We reserve the right to terminate accounts
                    in our sole discretion.
                </li>
                <li>
                    Disclaimer. WE DO NOT MAKE ANY REPRESENTATIONS OR WARRANTIES, NOR ARE WE LIABLE, IN
                    CONNECTION WITH YOUR USE OF SERVICES PROVIDED BY THIRD PARTIES, INCLUDING, WITHOUT
                    LIMITATION, CLOSINGCORP AND ANY OTHER SERVICE PROVIDERS..
                </li>
                <li>
                    General and Legal Notices. You may contact us at <a
                        href="mailto:info@titleforward.com">info@titleforward.com</a> or via mail or
                    courier to our current address as indicated on the Title Forward Site.
                </li>
                <li>DART Service Terms and Disclaimers.</li>
                <ul class="bullet_list2">
                    <li>
                        By accessing the DART Service you hereby acknowledge and agree that:
                        <ul class="bullet_list">
                            <li>
                                You will not, and will not knowingly assist any third party to: (i) modify or
                                create derivative works of the DART Service, or copy, modify, aggregate, harvest
                                data from, or make any derivative works based upon the DART Service, including,
                                without limitation, to create a database, directory, or mailing list with such
                                data, (ii) reverse engineer, decrypt, disassemble, or decompile any object code
                                or algorithms of all or any part of the DART Service, (iii) license, sublicense,
                                sell, resell, transfer, or assign the DART Service to any third party, (iv)
                                remove, obscure, deface, or otherwise interfere with any proprietary or
                                restrictive notice or legend contained or included on the DART Service, (v)
                                impair the functionality or the security of the DART Service or any other
                                ClosingCorp product or service, (vi) use the DART Service for any other purpose,
                                including, without limitation, to commercially exploit the DART Service or to
                                build a competitive product or service, or (vii) use the DART Service in
                                violation of this Section 2.6, the Agreement, or any applicable terms presented
                                by ClosingCorp, or in violation of any applicable local, state, national, or
                                foreign laws, treaties, rules or regulations.
                            </li>
                            <li>
                                Without limiting the foregoing restrictions, data obtained from the DART Service
                                is solely intended for your use for: (i) purposes of preparing for or completing
                                closing disclosure or related closing documents in connection with the
                                settlement of a residential real estate transaction; or (ii) obtaining
                                preliminary ("pre-qual") fee estimates. You shall not otherwise use or knowingly
                                allow the DART Service to be used for any purpose, including without limitation
                                use by lenders or mortgage originators for the purpose of estimating recording
                                fees and transfer taxes on a closing disclosure form or other type of closing
                                cost estimate or closing cost calculator during the loan origination or closing
                                process.
                            </li>
                            <li>
                                You are responsible for all activity occurring through your access or use of the
                                DART Service via the Title Forward Sites.
                            </li>
                        </ul>
                    </li>
                    <li>
                        CLOSINGCORP AND TITLE FORWARD MAKE NO REPRESENTATION, WARRANTY, OR GUARANTEE AS TO THE
                        RELIABILITY, TIMELINESS, QUALITY, SUITABILITY, AVAILABILITY, ACCURACY, OR COMPLETENESS
                        OF THE DART SERVICE. THE DART SERVICE IS PROVIDED TO YOU STRICTLY ON AN "AS IS" BASIS.
                        ALL CONDITIONS, REPRESENTATIONS, AND WARRANTIES, WHETHER EXPRESS, IMPLIED, STATUTORY, OR
                        OTHERWISE, INCLUDING WITHOUT LIMITATION ANY IMPLIED WARRANTY OF MERCHANTABILITY, FITNESS
                        FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT OF THIRD PARTY RIGHTS, ARE HEREBY
                        DISCLAIMED BY CLOSINGCORP AND TITLE FORWARD TO THE MAXIMUM EXTENT PERMITTED BY
                        APPLICABLE LAW. THE DART SERVICE MAY BE SUBJECT TO LIMITATIONS, DELAYS, AND OTHER
                        PROBLEMS INHERENT IN THE USE OF THE INTERNET AND ELECTRONIC COMMUNICATIONS, AND NEITHER
                        CLOSINGCORP NOR TITLE FORWARD SHALL BE RESPONSIBLE FOR ANY DELAYS, DELIVERY FAILURES, OR
                        OTHER DAMAGE RESULTING FROM SUCH PROBLEMS.
                    </li>
                    <li>
                        IN NO EVENT WILL CLOSINGCORP OR TITLE FORWARD BE LIABLE TO YOU FOR ANY INDIRECT,
                        PUNITIVE, SPECIAL, EXEMPLARY, INCIDENTAL, CONSEQUENTIAL, OR OTHER DAMAGES OF ANY TYPE OR
                        KIND (INCLUDING LOSS OF DATA, USE, OR ANY OTHER ECONOMIC ADVANTAGE) ARIS360ING OUT OF, OR
                        IN ANY WAY CONNECTED WITH, THE DART SERVICE (INCLUDING ERRORS OR OMISSIONS) EVEN IF
                        CLOSINGCORP AND/OR TITLE FORWARD HAVE BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH
                        DAMAGES.
                    </li>

                </ul>
            </ol>
        </li>
    </ol>



    <h2>ADDENDUM: WALK SCORE SERVICES</h2>
    <p>
        Welcome! This Walk Score Services Addendum ("Walk Score Services Addendum") is hereby incorporated into
        and is a part of the overall Agreement between you and the ARIS360 Homes Companies. The terms of this Walk
        Score Services Addendum supplement the terms of the Agreement with respect to the Walk Score Services
        (defined below) and in the event any term of this Walk Score Services Addendum directly conflicts with a
        term of the Agreement, the term contained in this Walk Score Services Addendum will control.
    </p>
    <p>
        The Walk Score Services are offered by Walk Score and by accessing, downloading, or using any portion of
        the Walk Score Services, you signify that you accept the terms of this Walk Score Services Addendum as
        between you and Walk Score.
    </p>


    <ul class="number_list">
        <li>
            <h5>DEFINITIONS</h5>
            <ol class="roman_list">
                <li>
                    <strong>"Walk Score"</strong> means Walk Score Management, LLC.
                </li>
                <li>
                    <strong>"Walk Score API"</strong> means the API as further described on the Walk Score Sites
                    at <a href="https://www.walkscore.com/professional/pricing.php"
                        target="_blank">https://www.walkscore.com/professional/pricing.php</a>.
                </li>
                <li>
                    <strong>"Walk Score Services"</strong> means the Walk Score Sites and the services provided
                    through the Walk
                    Score Sites that are not otherwise covered by the P/E Agreements.
                </li>
                <li>
                    <strong>"Walk Score Sites"</strong> means WalkScore.com and other websites and mobile
                    applications
                    through which Walk Score may offer services.
                </li>
                <li>
                    <strong>"Walk Score Widget"</strong> means the embeddable link that users of the Walk Score
                    Services may
                    use in accordance with this Walk Score Services Addendum and the Agreement.
                </li>
                <li>
                    <strong>"WSAPIKEY"</strong> has the meaning set forth in Section 2.3 of this Walk Score
                    Services
                    Addendum.
                </li>
                <li>
                    <strong>"WSID"</strong> has the meaning set forth in Section 2.3 of this Walk Score Services
                    Addendum.
                </li>

            </ol>

            <p>
                All other capitalized terms will have the meaning as provided elsewhere in this Walk Score
                Services Addendum or in the Agreement.
            </p>

        </li>
        <li>
            <h5>WALK SCORE SERVICES TERMS</h5>
            <ol class="roman_list">
                <li>
                    <strong>
                        You are required to enter into a separate agreement to procure a Premium or Enterprise
                        Subscription for the Walk Score API or other Walk Score Professional Subscription, as
                        further described on the Walk Score Sites
                        at
                        <a href="https://www.walkscore.com/professional/pricing.php"
                            target="_blank">https://www.walkscore.com/professional/pricing.php</a>
                        (the "P/E Agreements"). The P/E
                        Agreements are not covered here or by the Agreement.
                    </strong>
                </li>
                <li>
                    Who May Use the Walk Score Services. To use the Walk Score Services, you must be a resident
                    of the United States or Canada.
                </li>
                <li>
                    Provision of Services. To access certain features and tools offered by Walk Score or its
                    service providers in connection with the Walk Score Services, you may need to register with
                    Walk Score or its service providers. You must first request a valid Walk Score I.D. ("WSID")
                    for the Walk Score Widget or a valid Walk Score API Key ("WSAPIKEY"), as applicable, to
                    access or use certain features of the Walk Score Services. Other than initial queries for a
                    valid WSID or WSAPIKEY, all queries sent to Walk Score requesting data must reference your
                    valid WSID or WSAPIKEY. You agree to provide accurate, true, current, and complete
                    information to Walk Score. The personal information you provide in connection with the Walk
                    Score Services will be protected as described in our
                    <a href="{{url('homes-privacy-notice')}}" target="_blank">Privacy Notice. </a>
                    You are responsible for
                    all activities related to the Walk Score Services that occur through your account and
                    password. You agree to keep your password confidential, not use others' accounts, nor permit
                    others to use your account. The WSID and WSAPIKEY are personal to you, and any individuals
                    or entities who wish to access and use the Walk Score Services must obtain their own
                    licenses and keys. We reserve the right to terminate or suspend any account, WSID, or
                    WSAPIKEY in our sole discretion.
                </li>
                <li>
                    License. Subject to your compliance with the terms of this Walk Score Services Addendum and
                    the
                    <a href="https://www.walkscore.com/trademark-use.shtml" target="_blank">Walk Score Trademark
                        Guidelines</a>
                    , Walk Score hereby grants to you a non-exclusive,
                    revocable, non-sublicensable, non-transferable license to display Walk Score Services and to
                    embed the Walk Score Widget on websites and mobile applications and to reproduce and display
                    the Walk Score name and logo solely in connection with such display and embedding. This
                    limited license is granted to you subject to you signing up through the
                    <a href="https://www.walkscore.com/" target="_blank">Walk Score Sites</a>
                    and
                    your agreement to comply with the following:

                    <ul class="bullet_list2">
                        <li>
                            You shall not use in your URLs nor purchase or register in any registrar, search
                            engine, referral or advertising service (such as Google's AdWords) any of the
                            following terms: "Walk Score," "walkscore," "walking score," "walkability score,"
                            "Transit Score," "transitscore," "transportation score," "Commute Score,"
                            "commutescore," "Bike Score," "bikescore," "biking score," or "bikeability score."
                        </li>
                        <li>
                            You shall not use Walk Score Services for any other purpose not expressly authorized
                            by this Walk Score Services Addendum, without Walk Score's prior written consent.
                        </li>
                        <li>
                            You shall not use Walk Score Services in any way that is unlawful, or harms Walk
                            Score, its service providers, its suppliers, your end users, or any other person.
                        </li>
                        <li>
                            You shall not reproduce, modify, distribute, decompile, disassemble, or reverse
                            engineer any portion of Walk Score, Transit Score, Bike Score, Travel Time, Score
                            Details or Walk Score Services.
                        </li>
                        <li>
                            You shall not provide a means to execute any "bulk download" operations; cache or
                            otherwise store any Walk Score content including, without limitation, Walk Score,
                            Bike Score, and Transit Score ratings; and/or modify any Walk Score content, without
                            Walk Score's prior written consent.
                        </li>
                        <li>
                            <p>
                                You shall limit your use of the Walk Score Services to one thousand (1,000)
                                views of
                                the Walk Score Widget per day and five thousand (5,000) calls to the Walk Score
                                API
                                per day. Higher daily limits are available under the P/E Agreements
                            </p>

                            <p>
                                All rights not expressly granted to you under the Agreement, or this Walk Score
                                Services Addendum are reserved by Walk Score.
                            </p>
                        </li>
                    </ul>

                </li>

                <li>
                    <strong>Branding and Linking Requirements.</strong>
                    <ul class="bullet_list2">
                        <li>
                            Walk Score Widget. You agree that you will not modify the Walk Score Widget in any
                            way except via approved parameters as documented on the Walk Score Widget
                            documentation page. You agree to display the full Walk Score Widget on your website
                            and to not remove, obscure, or modify any portion of the Walk Score Widget with
                            other website elements.
                        </li>
                        <li>
                            Walk Score APIs (including the Walk Score API, Bike Score API, Score Details API,
                            Transit Score API, Public Transit API, and Travel Time API). You agree to follow the
                            branding and linking requirements detailed online
                            at
                            <a href="https://www.walkscore.com/professional/branding-requirements.php"
                                target="_blank">https://www.walkscore.com/professional/branding-requirements.php</a>
                            . In addition,
                            each Walk Score, Bike Score, Travel Time, Score Details, and Transit Score you
                            display must include a hyperlink to the correlating address-specific page on
                            WalkScore.com using the URL provided by the API.
                        </li>

                    </ul>
                </li>

                <li>
                    Termination. Any termination of the Agreement or this Walk Score Services Addendum shall
                    also immediately terminate the licenses granted to you hereunder. Upon any termination of
                    the Agreement or this Walk Score Services Addendum, you shall promptly delete and remove all
                    calls and references to the Walk Score Services from all webpages, scripts, widgets,
                    applications, and other software in your possession or under your control.
                </li>
                <li>
                    Limited Relationship. Walk Score and you are, and shall remain, independent contractors, and
                    nothing in the Agreement or this Walk Score Services Addendum shall be construed as creating
                    an employer-employee relationship, principal-agent relationship, partnership or joint
                    venture. Although you are permitted to publicize your use of Walk Score Services subject to
                    the terms herein, you agree not to make any other statements, without the prior written
                    consent of Walk Score, implying a different kind of relationship between you and Walk Score
                    including any implied endorsement of your content, products, or services by Walk Score.
                </li>
                <li>
                    General and Legal Notices. You may contact us here or via mail or courier to our
                    current address at 5209 Lake Washington Blvd NE Suite 220, Kirkland, WA 98033
                </li>

            </ol>
        </li>

    </ul>



    <p>
        If you are using a screen reader, or having trouble reading this website, please call ARIS360 Homes
        Customer Support for help at <a href="tel:+8339661976">(833) 966-1976</a>
    </p>



</section>

@endsection