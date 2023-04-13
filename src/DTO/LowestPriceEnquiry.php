<?php

/*
 * Copyright (C) 2009 - 2023
 * Author:   Sudhakar Krishnan <featuriz@gmail.com>
 * License:  http://www.featuriz.in/licenses/LICENSE-2.0
 * Created:  Thu, 13 Apr 2023 12:07:46:746 pm (IST)
 */

namespace App\DTO;

/**
 * Description of LowestPriceEnquiry
 *
 * @author Sudhakar Krishnan <featuriz@gmail.com>
 */
class LowestPriceEnquiry implements PromotionEnquiryInterface {

    private ?int $productId;
    private ?int $quantity;
    private ?string $requestLocation;
    private ?string $voucherCode;
    private ?string $requestDate;
    private ?int $price;
    private ?int $discountedPrice;
    private ?int $promotionId;
    private ?string $promotionName;

    public function getProductId(): ?int {
        return $this->productId;
    }

    public function getQuantity(): ?int {
        return $this->quantity;
    }

    public function getRequestLocation(): ?string {
        return $this->requestLocation;
    }

    public function getVoucherCode(): ?string {
        return $this->voucherCode;
    }

    public function getRequestDate(): ?string {
        return $this->requestDate;
    }

    public function getPrice(): ?int {
        return $this->price;
    }

    public function getDiscountedPrice(): ?int {
        return $this->discountedPrice;
    }

    public function getPromotionId(): ?int {
        return $this->promotionId;
    }

    public function getPromotionName(): ?string {
        return $this->promotionName;
    }

    public function setProductId(?int $productId) {
        $this->productId = $productId;
        return $this;
    }

    public function setQuantity(?int $quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    public function setRequestLocation(?string $requestLocation) {
        $this->requestLocation = $requestLocation;
        return $this;
    }

    public function setVoucherCode(?string $voucherCode) {
        $this->voucherCode = $voucherCode;
        return $this;
    }

    public function setRequestDate(?string $requestDate) {
        $this->requestDate = $requestDate;
        return $this;
    }

    public function setPrice(?int $price) {
        $this->price = $price;
        return $this;
    }

    public function setDiscountedPrice(?int $discountedPrice) {
        $this->discountedPrice = $discountedPrice;
        return $this;
    }

    public function setPromotionId(?int $promotionId) {
        $this->promotionId = $promotionId;
        return $this;
    }

    public function setPromotionName(?string $promotionName) {
        $this->promotionName = $promotionName;
        return $this;
    }

    public function jsonSerialize(): mixed {
        return get_object_vars($this);
    }

}
