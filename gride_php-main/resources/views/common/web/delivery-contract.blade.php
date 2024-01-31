@extends('common.web.layout.base')
{{ App::setLocale(Request::route('lang') !== null ? Request::route('lang') : 'en') }}
@section('styles')
@parent

@stop
@section('content')

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="sec-title">
					<h3 class="text-center">
						<b>DELIVERY SERVICES AGREEMENT</b>
					</h3>
				</div>
				<div class="sec-content">
					<ol>
						<li>
							The Contractor provides the opportunity to connect the Client as suppliers to its consumers. Clients use the Gridetech’s platform to deliver orders to their consumers. The Contractor is not a restaurant, flower shop, liquor store or food preparation business. The Contractor is a platform that acts as a middleman connecting and assisting in the facilitation of delivery services from the Client to the consumer via Contractor. 
						</li>
						<li>
							Contractor is a legally licensed and insured, independent provider of delivery services. Contractor is in lawful possession of and legally permitted to operate all equipment, including, but not limited to, wireless smartphone, tablets and vehicle necessary to meet general industry standards (“General Industry Standard”) and consumer expectations (“Consumer Expectations”) of completing delivery opportunities (“Delivery Opportunity”) in the most efficient method (“Most Efficient Method”) (definitions below). 
						</li>
						<b>NOW, THEREFORE, FOR AND IN CONSIDERATION of the mutual promises and agreements contained herein, the Client hires Gridetech to work under the terms and conditions hereby agreed upon by the Parties:</b>
						<li>
							<b>Term</b>. The term of this Agreement shall commence on ___________________, 20____ and terminate: (check one)
							<ul>
								<li>At-Will: Written notice of at least ____ days’ notice. </li>
								<li> End Date: On ___________________, 20____.</li>
								<li> Other: _______________________________________________________.</li>
							</ul>
						</li>
						<li>
							<b>The Service.</b> Gridetech through it’s independent Contractor will have the opportunity to provide delivery services from clients as suppliers to consumers using the Company’s platform (the “Services”). Depending on the nature of the delivery and the requirements of the Company and/or consumers and suppliers, such Services may be carried out by means of any combination of (a) foot travel by Contractor, (b) use of Contractor’s personal bicycle, (c) use of Contractor’s personal vehicle, or (d) use of Contractor’s personal mobile device, tablet, or computer. Contractor acknowledges that the Company has the discretion as to which, if any, Delivery Opportunities has to offer, and Contractor has discretion as to which, if any, Delivery Opportunities to accept. Gridetech, while providing the Service, shall comply with the policies, standards, and regulations of the Client, including local, State, and Federal laws and to the best of their abilities.
						</li>
						<li>
							<b>Payment Amount</b>. The Client agrees to pay Gridetech the following compensation for the Service performed under this Agreement:
							<ul>
								<li>$____ / Hour</li>
								<li>$____ / per Job. A “Job” is _______________________________________.</li>
								<li>Other: _______________________________________________________.</li>
							</ul>
						</li>
						<li>
							<b>Consumer Expectations.</b> Both parties agree that while Contractor is an independent provider of delivery services, the Contractor is performing Services on behalf of the client, therefore the consumer has the right to hold Contractor providing Services responsible for certain norms surrounding the Services being provided. These norms include, but may not be limited to Contractor providing Services in a timely (shortest method available), safe and professional manner consistent with General Industry Standard, Contractor attempting to provide the Services as close to “door to door” as possible taking into consideration logistical and legal limitations, or providing Services from supplier to a mutually agreed upon location with the consumer, food and/or non-food items are delivered to consumer representative of the condition provided by the supplier, food and/or non-food items are representative of the order the consumer placed with the supplier on the Company platform, and consumer’s personal information and property are respected by Contractor during and after Services are provided.
						</li>
						<li>
							<b>Contractor’s Acceptance of Providing Services</b>. During the term of this Agreement, the Company may notify Contractor of the opportunity to complete Services involving suppliers and consumers facilitated through the platform. With respect to each Delivery Opportunity accepted by Contractor, Contractor agrees to complete any of the necessary steps to fully provide the agreed upon Service, including retrieval of the order from the supplier, and delivery of the order to consumers in a timely (shortest method available), safe and professional manner consistent with Customer Expectations and General Industry Standards.
						</li>
						<li>
							<b>Confidential Information.</b> Contractor agrees, at all times during the term of this Agreement and thereafter, to hold in strictest confidence, and not to use except for the benefit of the Company to the extent necessary to perform its obligations hereunder, and to not disclose to any person, firm, corporation or other entity, without written authorization from the Company in each instance, any Confidential Information (as defined below) that a Contractor obtains, accesses or creates during the term of this Agreement, whether or not during working hours, until such Confidential Information becomes publicly and widely known and made generally available through no wrongful act of Contractor. Contractor further agrees not to make copies of such Confidential Information except as authorized by the Company. 
						</li>
						<li>
							<b>Limitation On Liability.</b> Under No Circumstance Will Gridetech Or Its Affiliates Be Liable To The Company Or Any Third Party For Any Special, Indirect, Incidental, Consequential, Punitive, Reliance, Or Exemplary Damages That Result From This Agreement, Even If Gridetech Or Its Authorized Representative Has Been Advised Of The Possibility Of Such Damages. In No Event Will The Company’s Total Liability To Contractor For All Damages, Losses, And Causes Of Action Arising Out Of Or Relating To This Agreement (Whether In Contract Or Tort, Including Negligence, Warranty, Or Otherwise) Exceed The Fees Payable By The Company To Contractor Hereunder.</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

@stop

<style type="text/css">
	section {
		padding: 120px 0;
	}
	.sec-title h3 {
		padding-bottom: 15px;
		font-size: 30px;
	}
	.sec-content ol li {
		list-style-type: decimal;
    	padding: 20px 10px;
	}
	.sec-content ul li {
		list-style-type: disc;
	    padding: 5px;
	    margin-left: 20px;
	    margin-top: 10px;
	}
</style>