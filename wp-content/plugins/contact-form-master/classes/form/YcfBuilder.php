<?php
require_once(YCF_CLASSES_FORM."YcfForm.php");
class YcfBuilder extends YcfForm {

	public function createFormAdminElement() {

		$formElements = $this->getFormElementsData();
		$content = '';
		$oderKeys = implode(',',array_keys($formElements));

		foreach($formElements as $key => $formElement) {
			$args['oderId'] = $key;
			$content .= YcfFunctions::createAdminViewHtml($formElement, $args);
		}
		$content .= '<input type="hidden" name="contact-fields-order" class="form-element-ordering" value="'.$oderKeys.'">';
		update_option('YcfFormDraft', $formElements);
		return $content;
	}

	public function render() {

		$formId = $this->getFormId();
		$formData = $this->getFormElementsData();
		$args = array();

		$contactForm = '<form id="ycf-contact-form" class="ycf-contact-form ycf-form-'.$formId.'" action="admin-post.php" method="post">';

		foreach ($formData as $index => $formInfo) {

			switch($formInfo['type']) {

				case 'text':
				case 'email':
				case 'number':
				case 'url':
					$contactForm .= $this->createSimpleInput($formInfo, $index, $args);
					break;
				case 'textarea':
					$contactForm .= $this->createTextareaElement($formInfo, $index, $args);
					break;
				case 'submit':
					$contactForm .= $this->createSubmitButton($formInfo, $index, $args);
					break;
			}
		}
		$contactForm .= '</form>';

		return $contactForm;
		return $formId;
	}

	public function createSubmitButton($elementData, $index, $args) {

		$element = '<div class="ycf-submit">
					<input type="'.$elementData['type'].'" id="ycf-submit-button" value="'.$elementData['value'].'">
					<img src="'.YCF_IMG_URL.'loading.gif" class="ycf-hide ycf-spinner">
				</div>';

		return $element;
	}

	public function createTextareaElement($elementData, $index, $args) {

		$element = '<div class="ycf-form-element"  ycf-data-order="'.$index.'">
						<div class="ycf-form-label-wrapper">
							<span class="ycf-form-label">'.$elementData['label'].'</span>
						</div>
						<div class="ycf-form-element-wrapper">
							<textarea name="'.$elementData['name'].'"></textarea>
						</div>
					</div>';

		return $element;
	}

	public function createSimpleInput($elementData, $index, $args) {

		$element = '<div class="ycf-form-element" ycf-data-order="'.$index.'">
						<div class="ycf-form-label-wrapper">
							<span class="ycf-form-label">'.$elementData['label'].'</span>
						</div>
						<div class="ycf-form-element-wrapper">
							<input type="'.$elementData['type'].'" name="'.$elementData['name'].'" value="'.$elementData['value'].'">
						</div>
					</div>';

		return $element;
	}
}