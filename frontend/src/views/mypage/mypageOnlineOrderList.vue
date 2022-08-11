<template>
  <div id="container">
    <div class="location headerCate">
      <div class="header">
        <router-link to="/">
          <div class="depth"><button href="/" class="btn_h">홈</button></div>
        </router-link>

        <div class="depth">
          <button type="button" class="btn_h">마이페이지</button>
        </div>

        <div class="depth">
          <button type="button" class="btn_h">주문/배송현황</button>
        </div>

        <div class="depth">
          <button type="button" class="btn_h">주문배송내역</button>
        </div>
      </div>
    </div>
    <myPageHeader />
    <section class="contents d-flex row align-items-baseline justify-content-between">
      <myPageSide activeLink="/myPageOnlineOrderList" />
      <div class="col-10 p-5 r_border">

        <!-- 주문/배송현황 -->
        <h3 class="pb-4">주문/배송현황</h3>
        <div class="tabs">
          <div class="tabs__head">
            <div @click="tabs__toggle" class="tabs__toggle is-active">
              <span class="tabs__name">주문배송내역</span>
            </div>
            <div @click="tabs__toggle" class="tabs__toggle">
              <span class="tabs__name">취소신청</span>
            </div>
            <div @click="tabs__toggle" class="tabs__toggle">
              <span class="tabs__name">반품신청</span>
            </div>
            <div @click="tabs__toggle" class="tabs__toggle">
              <span class="tabs__name">교환신청</span>
            </div>
            <div @click="tabs__toggle" class="tabs__toggle">
              <span class="tabs__name">증빙서류발급</span>
            </div>
            <div @click="tabs__toggle" class="tabs__toggle">
              <span class="tabs__name">구매내역</span>
            </div>
            <div @click="tabs__toggle" class="tabs__toggle">
              <span class="tabs__name">정기구독내역</span>
            </div>
          </div>

          <div class="tabs__body">
            <div class="tabs__content is-active">
              <searchDate />

              <!-- 주문배송내역 -->
              <!-- 전체주문체결내역 -->
              <div class="middleTab">
                <div class="middleTabs">
                  <a @click="activetab = 1" :class="[activetab === 1 ? 'active' : '']">전체주문체결내역</a>
                  <a @click="activetab = 2" :class="[activetab === 2 ? 'active' : '']">주문취소내역</a>
                  <a @click="activetab = 3" :class="[activetab === 3 ? 'active' : '']">반품처리내역</a>
                  <a @click="activetab = 4" :class="[activetab === 4 ? 'active' : '']">교환처리내역</a>
                </div>

                <div class="content">
                  <div v-if="activetab === 1" class="middelCtnt">
                    <div class="orderDiv">
                      <p>총 <strong>0</strong> 건</p>
                      <div class="orderTableDiv">
                        <table class="orderTable">
                          <thead>
                            <th style="width:120px;">주문일자</th>
                            <th style="width:115px;">주문번호</th>
                            <th>대표제품 명</th>
                            <th style="width:110px;">결제금액</th>
                            <th style="width:110px;">처리현황</th>
                            <th style="width:110px;">배송조회</th>
                            <th style="width:110px;">수취확인</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td colspan="7">현재 전체주문체결내역이 없습니다.</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="orderText">
                        <p>※ 주문번호와 제품명을 클릭 하시면 주문 상세 내역을 보실 수 있습니다.</p>
                        <p>※ 배송정보는 처리현황이 배송 중, 배송완료 상태에서 조회가 가능합니다.</p>
                        <p>※ 이상없이 제품을 받으셨다면 수취확인을 해주세요. 확인하지 않으실 경우 배송시작일 부터 7일이후에 자동으로 배송완료상태로 변경됩니다.</p>
                        <p>※ 온라인에서 구매내역 표기시 제품의 정상가로 표기 됩니다. (단, 등급 반영시 실제 결제가 기준으로 반영됩니다.)</p>
                        <p>※ 등급 반영시 반품내역, 포인트 구매내역은 제외 됩니다.</p>
                      </div>
                      <div class="orderProcess">
                        <div class="icons icon1">
                          <span class="orderTitle">결제대기</span>
                        </div>
                        <div class="icons icon2">
                          <span class="orderTitle">결제완료</span>
                          <div class="orderTxt">
                            결제가 완료되어 관리자가 <br>
                            주문내역을 확인 중입니다 <br>
                            취소가 가능합니다
                          </div>
                        </div>
                        <div class="icons icon3">
                          <span class="orderTitle">제품준비중</span>
                          <div class="orderTxt">
                            결제 확인 후 택배사에서 <br>
                            제품을 포장하고 있습니다.
                          </div>
                        </div>
                        <div class="icons icon4">
                          <span class="orderTitle">배송중</span>
                          <div class="orderTxt">
                            제품을 포장 후 배송중입니다. <br>
                            송장번호를 통해 현 배송상태를 <br>
                            확인하실 수 있습니다.
                          </div>
                        </div>
                        <div class="icons icon5">
                          <span class="orderTitle">배송완료</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- 주문배송내역 -->
                  <!-- 주문취소내역 -->
                  <div v-if="activetab === 2" class="middelCtnt">
                    <div class="orderDiv">
                      <p>총 <strong>0</strong> 건</p>
                      <div class="orderTableDiv">
                        <table class="orderTable">
                          <thead>
                            <th style="width:120px;">주문일자</th>
                            <th style="width:115px;">주문번호</th>
                            <th>대표제품 명</th>
                            <th style="width:110px;">결제금액</th>
                            <th style="width:110px;">처리현황</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td colspan="5">주문취소 내역이 없습니다.</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="orderText">
                        <p>※ 주문번호나 제품명을 클릭 하시면 주문 상세 내역을 보실 수 있습니다.</p>
                        <p>※ 취소가 완료된 경우 취소완료로 상태가 표시됩니다.</p>
                      </div>
                      <div class="orderProcess">
                        <div class="icons icon6">
                          <span class="orderTitle">취소접수</span>
                          <div class="orderTxt">
                            취소일과 결제일의 해당 월이 <br>
                            다른 휴대폰결제와 가상계좌 <br>
                            결제인 경우 환불이 <br>
                            완료되기 전까지 <br>
                            취소접수로 표시 됩니다.
                          </div>
                        </div>
                        <div class="icons icon7">
                          <span class="orderTitle">취소완료</span>
                          <div class="orderTxt">
                            관리자가 취소 접수내역을 <br>
                            확인 후 환불해 드리고 <br>
                            취소 승인 시 <br>
                            취소 완료 상태가 됩니다.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- 주문배송내역 -->
                  <!-- 반품처리내역 -->
                  <div v-if="activetab === 3" class="middelCtnt">
                    <div class="orderDiv">
                      <p>총 <strong>0</strong> 건</p>
                      <div class="orderTableDiv">
                        <table class="orderTable">
                          <thead>
                            <th style="width:120px;">주문일자</th>
                            <th style="width:115px;">반품번호</th>
                            <th>대표제품 명</th>
                            <th style="width:110px;">결제금액</th>
                            <th style="width:110px;">처리현황</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td colspan="5">반품 내역이 없습니다.</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="orderText">
                        <p>※ 주문번호나 제품명을 클릭 하시면 주문 상세 내역을 보실 수 있습니다.</p>
                        <p>※ 취소가 완료된 경우 취소완료로 상태가 표시됩니다.</p>
                      </div>
                      <div class="orderProcess">
                        <div class="icons icon6">
                          <span class="orderTitle">반품접수</span>
                          <div class="orderTxt">
                            반품신청을 한 상태입니다.
                          </div>
                        </div>
                        <div class="icons icon8">
                          <span class="orderTitle">반품불가</span>
                          <div class="orderTxt">
                            반품 사유 분석 및 통화 후, <br>
                            반품 불가로 승인 날 경우 입니다.
                          </div>
                        </div>
                        <div class="icons icon4">
                          <span class="orderTitle">반품중</span>
                          <div class="orderTxt">
                            모든 결제방법 공통으로, <br>
                            반품승인 후 제품을 수령 해, <br>
                            올 때 까지의 단계 입니다.
                          </div>
                        </div>
                        <div class="icons icon9">
                          <span class="orderTitle">환불진행</span>
                          <div class="orderTxt">
                            무통장입금 결제의 경우만 <br>
                            존재하는 단계로 반품제품 수량 <br>
                            확인 후 관리자가 환불 <br>
                            계좌로 입금하는 단계입니다.
                          </div>
                        </div>
                        <div class="icons icon10">
                          <span class="orderTitle">반품완료</span>
                          <div class="orderTxt">
                            환불이 완료된 상태입니다. <br>
                            (입금확인에는 반품 완료 후 <br>
                            2,3일의 시간이 소요될 수 <br>
                            있습니다.)
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- 주문배송내역 -->
                  <!-- 교환처리내역 -->
                  <div v-if="activetab === 4" class="middelCtnt">
                    <div class="orderDiv">
                      <p>총 <strong>0</strong> 건</p>
                      <div class="orderTableDiv">
                        <table class="orderTable">
                          <thead>
                            <th style="width:120px;">주문일자</th>
                            <th style="width:115px;">교환번호</th>
                            <th>대표제품 명</th>
                            <th style="width:110px;">결제금액</th>
                            <th style="width:110px;">처리현황</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td colspan="5">교환 내역이 없습니다.</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="orderText">
                        <p>※ 씨드 내역 반영 시 씨드 쿠폰 발급, 등급산정에 대한 씨드 차감개수는 제외 됩니다.</p>
                      </div>
                      <div class="orderProcess">
                        <div class="icons icon6">
                          <span class="orderTitle">교환접수</span>
                          <div class="orderTxt">
                            교환을 신청하신 <br>
                            상태 입니다.
                          </div>
                        </div>
                        <div class="icons icon11">
                          <span class="orderTitle">교환불가</span>
                          <div class="orderTxt">
                            교환이 불가능한 제품인 경우 <br>
                            교환불가상태로 변경됩니다. <br>
                            상담은 고객센터를 <br>
                            이용해 주시기 바랍니다. <br>
                          </div>
                        </div>
                        <div class="icons icon12">
                          <span class="orderTitle">교환안내</span>
                          <div class="orderTxt">
                            반품하신 제품이 <br>
                            확인된 상태입니다. <br>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- 취소신청 -->
            <div class="tabs__content">
              <searchDate />
              <div class="orderDiv">
                <p>총 <strong>0</strong> 건</p>
                <div class="orderTableDiv">
                  <table class="orderTable">
                    <thead>
                      <th style="width:120px;">주문일자</th>
                      <th style="width:115px;">주문번호</th>
                      <th>대표제품 명</th>
                      <th style="width:110px;">결제금액</th>
                      <th style="width:110px;">처리현황</th>
                      <th style="width:110px;">주문취소</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="6">현재 주문취소가 가능한 주문내역이 없습니다.</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="orderText">
                  <p>※ 주문취소는 주문접수, 결제완료 단계에서만 수정이 가능하며 즉시처리가 가능합니다.</p>
                  <p>※ 주문취소처리 완료 후 환불금액은 2~3일내 결제하신 정보로 환불되며 신용카드의 경우 해당 카드회사에서 확인 하실 수 있습니다.</p>
                  <p>※ 취소시 사용한 포인트는 고객님의 뷰티포인트로 환불해드리며 사용쿠폰은 되돌려 드립니다.</p>
                </div>
                <div>
                  <h3 class="SubTitle">주문취소 이용안내</h3>
                </div>
                <div class="cancelDiv">
                  <div>취소 신청이란?</div>
                  <p>
                    구매 후, 또는 결제 완료후 구매의사가 변한 경우 취소할 수 있습니다. 다만 이 때는 판매자가 배송작업을 시작하기 전까지 취소가 가능합니다.<br>
                    이미 발송한 경우에는 반품 절차를 따라야 합니다.
                  </p>
                  <div>취소는 바로 되나요?</div>
                  <p>
                    주문취소는 주문접수/결제취소 단계에서는 즉시 가능하며, 제품준비중 단계 이후에는 취소가 불가능합니다.
                  </p>
                  <div>카드결제 취소, 환불은 언제 이뤄지나요?</div>
                  <p>
                    취소완료가 되면 카드는 바로 결제취소가 이뤄집니다. 카드사 홈페이지에서는 일반적으로 2~3일 이후에 반영됩니다.<br>
                    현금의 경우에는 취소 완료 후 환불계좌 확인 시점에서 2일 이내 환불처리 됩니다.
                  </p>
                </div>
              </div>
            </div>

            <!-- 반품신청 -->
            <div class="tabs__content">
              <searchDate />
              <div class="orderDiv">
                <p>총 <strong>0</strong> 건</p>
                <div class="orderTableDiv">
                  <table class="orderTable">
                    <thead>
                      <th style="width:120px;">주문일자</th>
                      <th style="width:115px;">주문번호</th>
                      <th>대표제품 명</th>
                      <th style="width:110px;">결제금액</th>
                      <th style="width:110px;">처리현황</th>
                      <th style="width:110px;">반품신청</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="6">현재 반품신청이 가능한 주문내역이 없습니다.</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="orderText">
                  <p>※ 반품은 배송완료 후 14일 이내에만 가능합니다.</p>
                  <p>※ 처리상태가 배송 중일때는 주문/배송내역에서 수취확인을 하시고 반품신청을 하셔야 합니다.</p>
                  <p>※ 반품 시 결제한 포인트는 되돌려드리며 사용쿠폰은 삭제됩니다.</p>
                  <p>※ 신용카드 결제의 경우, 반품할 제품을 제외하고 취소되지만 취소가 되지 않는 카드는 재결제를 하셔야 합니다.</p>
                  <p>※ 재결제 후 반품완료 시 이전 결제는 자동 취소 됩니다.</p>
                </div>
                <div class="cancelSubTitle">
                  <h3 class="SubTitle">반품 이용안내</h3>
                </div>
                <div class="cancelDiv">
                  <div>반품 신청이란?</div>
                  <p>
                    물건을 받아보고 나서 구매의사가 변한 경우 반품할 수 있습니다.<br>
                    반품에 관한 일반적인 사항은 관련법령이 판매자가 제시한 조건보다 우선합니다.
                  </p>
                  <div>일부 카드결제의 경우 왜 재결제를 해야 하나요?</div>
                  <p>
                    주문한 제품을 전체 반품 시에는 전부 환불이 되기 때문에 결제를 하지 않아도 제품확인 후 바로 환불을 해드리지만,<br>
                    일부 카드결제의 경우 부분환불이 되지않아 모두 취소가 되기 때문에 반품제품을 제외한 나머지 부분에 대한 결제를 해야 합니다.<br>
                    (이전 결제 취소는 반품제품 확인 후 처리됩니다.)
                  </p>
                  <div>반품배송비는 누가 부담하는 건가요?</div>
                  <p>
                    반품 시 배송비는 제품불량일 경우 이니스프리가, 제품불량이 아닌 변심 또는 취소인 경우에는 고객이 부담 하셔야 하며 반품 제품 반환 시 주문배송비와 반품배송비를 모두 부담 하셔야
                    합니다.
                  </p>
                  <div>카드결제 취소, 환불은 언제 이뤄지나요?</div>
                  <p>
                    반품 제품이 판매자에게 도착하고(수거완료), 반품에 대한 사유와 반품배송비 부담자 등이 확인되면 바로 카드결제 취소, 또는 현금 환불이 진행됩니다.
                  </p>
                </div>
              </div>
            </div>

            <!-- 교환신청 -->
            <div class="tabs__content">
              <searchDate />
              <div class="orderDiv">
                <p>총 <strong>0</strong> 건</p>
                <div class="orderTableDiv">
                  <table class="orderTable">
                    <thead>
                      <th style="width:120px;">주문일자</th>
                      <th style="width:115px;">주문번호</th>
                      <th>대표제품 명</th>
                      <th style="width:110px;">결제금액</th>
                      <th style="width:110px;">처리현황</th>
                      <th style="width:110px;">교환신청</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="6">현재 교환신청이 가능한 주문내역이 없습니다.</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="orderText">
                  <p>※ 선물하기는 교환이 불가능합니다.</p>
                  <p>※ 교환신청은 배송이 완료된 시점부터 신청이 가능합니다. 이미 받으신 경우에는 주문/배송내역에서 수취확인을 하신 후 신청하시기 바랍니다.</p>
                  <p>※ 교환신청은 주문한 제품이 잘못 배송 되었거나 배송된 제품에 하자가 있을 경우 신청이 가능합니다.</p>
                  <p>※ 교환의 경우 제품 옵션을 변경하려는 경우는, 해당 제품은 반품 후 다시 주문 하셔야 합니다.</p>
                  <p>※ 더 자세한 사항은 ‘주문처리안내’를 클릭 하시면 확인 하실 수 있습니다.</p>
                  <p>※ 변심에 의한 반품/교환인 경우 배송비는 고객 부담으로 해야 합니다.</p>
                </div>
                <div class="cancelSubTitle">
                  <h3 class="SubTitle">교환 이용안내</h3>
                </div>
                <div class="cancelDiv">
                  <div>교환 신청이란?</div>
                  <p>
                    물건을 받아보고 나서 구매의사가 변한 경우 교환할 수 있습니다.<br>
                    물품 하자에 의한 교환이 아닌 경우에는 판매자에게 새로이 배송할 제품의 재고가 있는지 확인이 필요합니다.
                  </p>
                  <div>교환 배송비는 누가 부담합니까?</div>
                  <p>
                    제품 하자에 의한 교환이 아닌 고객 변심에 의한 경우에는 고객 부담으로 해야 합니다.
                  </p>
                </div>
              </div>
            </div>

            <!-- 증빙서류발급 -->
            <div class="tabs__content">
              <searchDate />
              <div class="middleTabs">
                <a @click="activetab = 1" :class="[activetab === 1 ? 'active' : '']" style="width: 50%;">현금영수증</a>
                <a @click="activetab = 2" :class="[activetab === 2 ? 'active' : '']" style="width: 50%;">카드영수증</a>
              </div>

              <!-- 증빙서류발급 -->
              <!-- 현금영수증 -->
              <div class="content">
                <div v-if="activetab === 1" class="middelCtnt">
                  <div class="orderDiv">
                    <p>총 <strong>0</strong> 건</p>
                    <div class="orderTableDiv">
                      <table class="orderTable">
                        <thead>
                          <th style="width:120px;">주문일자</th>
                          <th style="width:115px;">주문번호</th>
                          <th>대표제품 명</th>
                          <th style="width:110px;">결제방법</th>
                          <th style="width:110px;">결제금액</th>
                          <th style="width:110px;">처리현황</th>
                          <th style="width:110px;">발급상태</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td colspan="7">기간 내 출력 가능한 현금영수증 내역이 없습니다.</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="orderText">
                      <p>※ 현금영수증의 발급은 1회만 가능합니다.</p>
                      <p>※ 포인트로 전부 구매하였을 경우에는 현금영수증이 발행되지 않습니다.</p>
                      <p>※ 영수증은 실제 금액을 기준으로 발행되며 쿠폰할인 및 포인트 결제 금액 분은 포함되어 있지 않습니다.</p>
                      <p>※ 신용카드 결제건의 경우 세금계산서 대용으로 매입세액공제를 받을 수 있는 신용카드전표가 발행되므로 별도의 세금계산서 발행은 불가능합니다.</p>
                      <p>※ 현금영수증 사업자 지출증빙용 발급을 원하실 경우 주문 시 신청해 주셔야 합니다.</p>
                      <p>※ 세금계산서 발행에 대해서는 고객센터를 통해 별도 문의를 해 주시기 바랍니다.</p>
                      <p>※ 카카오페이 결제건인 경우 [카카오톡 > 더보기(…) > Pay > 나의 카카오페이 > 이용내역] 에서 영수증 확인이 가능합니다.</p>
                      <p>※ 카카오머니 결제 시 현금영수증 출력은 지원되지 않습니다.</p>
                      <p>※ 네이버페이는 [네이버페이 > 결제내역 > 결제상세정보]에서 해당 영수증 확인 가능합니다.</p>
                    </div>
                    <div>
                      <h3 class="SubTitle">영수증 발급기준</h3>
                    </div>
                    <div class="orderTableDiv">
                      <table class="receiptTable">
                        <thead>
                          <tr>
                            <th style="width:20%;">영수증 종류</th>
                            <th style="width:40%;">현금영수증</th>
                            <th style="width:40%;">카드영수증</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>신청</th>
                            <td>주문 시 신청</td>
                            <td>결제 시 출력</td>
                          </tr>
                          <tr>
                            <th>발행시점</th>
                            <td>-</td>
                            <td>결제 완료</td>
                          </tr>
                          <tr>
                            <th>출력기간</th>
                            <td>발행일 기준 3개월</td>
                            <td>-</td>
                          </tr>
                          <tr>
                            <th>개인소득공제</th>
                            <td>가능</td>
                            <td>가능</td>
                          </tr>
                          <tr>
                            <th>사업자 지출증빙</th>
                            <td>주문 시 신청</td>
                            <td>주문 시 신청</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <!-- 증빙서류발급 -->
                <!-- 카드영수증 -->
                <div v-if="activetab === 2" class="middelCtnt">
                  <div class="orderDiv">
                    <p>총 <strong>0</strong> 건</p>
                    <div class="orderTableDiv">
                      <table class="orderTable">
                        <thead>
                          <th style="width:120px;">주문일자</th>
                          <th style="width:115px;">주문번호</th>
                          <th>대표제품 명</th>
                          <th style="width:110px;">결제방법</th>
                          <th style="width:110px;">결제금액</th>
                          <th style="width:110px;">처리현황</th>
                          <th style="width:110px;">발급상태</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td colspan="7">기간 내 출력 가능한 카드영수증 내역이 없습니다.</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="orderText">
                      <p>※ 현금영수증의 발급은 1회만 가능합니다.</p>
                      <p>※ 포인트로 전부 구매하였을 경우에는 현금영수증이 발행되지 않습니다.</p>
                      <p>※ 영수증은 실제 금액을 기준으로 발행되며 쿠폰할인 및 포인트 결제 금액 분은 포함되어 있지 않습니다.</p>
                      <p>※ 신용카드 결제건의 경우 세금계산서 대용으로 매입세액공제를 받을 수 있는 신용카드전표가 발행되므로 별도의 세금계산서 발행은 불가능합니다.</p>
                      <p>※ 현금영수증 사업자 지출증빙용 발급을 원하실 경우 주문 시 신청해 주셔야 합니다.</p>
                      <p>※ 세금계산서 발행에 대해서는 고객센터를 통해 별도 문의를 해 주시기 바랍니다.</p>
                      <p>※ 카카오페이 결제건인 경우 [카카오톡 > 더보기(…) > Pay > 나의 카카오페이 > 이용내역] 에서 영수증 확인이 가능합니다.</p>
                      <p>※ 카카오머니 결제 시 현금영수증 출력은 지원되지 않습니다.</p>
                      <p>※ 네이버페이는 [네이버페이 > 결제내역 > 결제상세정보]에서 해당 영수증 확인 가능합니다.</p>
                    </div>
                    <div>
                      <h3 class="SubTitle">영수증 발급기준</h3>
                    </div>
                    <div class="orderTableDiv">
                      <table class="receiptTable">
                        <thead>
                          <tr>
                            <th style="width:20%;">영수증 종류</th>
                            <th style="width:40%;">현금영수증</th>
                            <th style="width:40%;">카드영수증</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>신청</th>
                            <td>주문 시 신청</td>
                            <td>결제 시 출력</td>
                          </tr>
                          <tr>
                            <th>발행시점</th>
                            <td>-</td>
                            <td>결제 완료</td>
                          </tr>
                          <tr>
                            <th>출력기간</th>
                            <td>발행일 기준 3개월</td>
                            <td>-</td>
                          </tr>
                          <tr>
                            <th>개인소득공제</th>
                            <td>가능</td>
                            <td>가능</td>
                          </tr>
                          <tr>
                            <th>사업자 지출증빙</th>
                            <td>주문 시 신청</td>
                            <td>주문 시 신청</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- 구매내역 -->
            <div class="tabs__content">
              <searchDate />
              <div class="middleTabs">
                <a @click="activetab = 1" :class="[activetab === 1 ? 'active' : '']" style="width: 50%;">온라인 구매내역</a>
                <a @click="activetab = 2" :class="[activetab === 2 ? 'active' : '']" style="width: 50%;">매장 구매내역</a>
              </div>

              <div class="content">
                <div v-if="activetab === 1" class="middelCtnt">
                  <div class="orderDiv">
                    <p>총 <strong>0</strong> 건</p>
                    <div class="orderTableDiv">
                      <table class="orderTable">
                        <thead>
                          <th style="width:120px;">날짜</th>
                          <th style="width:115px;">주문번호</th>
                          <th>대표제품 명</th>
                          <th style="width:110px;">구매금액</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td colspan="4">기간 내 출력 가능한 현금영수증 내역이 없습니다.</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="orderText">
                      <p>※ 매장 구매/반품에 대한 상세 내역은 이니스프리 APP > 스마트 영수증에서 확인하실 수 있습니다.</p>
                      <p>※ 구매금액은 고객님이 지불하신 금액과 뷰티포인트 사용 금액을 합산한 금액입니다.</p>
                    </div>
                  </div>
                </div>

                <div v-if="activetab === 2" class="middelCtnt">
                  <div class="orderDiv">
                    <p>총 <strong>0</strong> 건</p>
                    <div class="orderTableDiv">
                      <table class="orderTable">
                        <thead>
                          <th style="width:120px;">날짜</th>
                          <th style="width:115px;">매장구분</th>
                          <th>제품명</th>
                          <th style="width:110px;">구매금액</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td colspan="4">기간 내 출력 가능한 현금영수증 내역이 없습니다.</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="orderText">
                      <p>※ 매장 구매/반품에 대한 상세 내역은 이니스프리 APP > 스마트 영수증에서 확인하실 수 있습니다.</p>
                      <p>※ 구매금액은 고객님이 지불하신 금액과 뷰티포인트 사용 금액을 합산한 금액입니다.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- 정기구독내역 -->
            <div class="tabs__content">
              <searchDate />
              <!-- 정기구독 신청내역 -->
              <!-- 전체주문체결내역 -->
              <div class="middleTab">
                <div class="middleTabs">
                  <a @click="activetab = 1" :class="[activetab === 1 ? 'active' : '']">전체주문체결내역</a>
                  <a @click="activetab = 2" :class="[activetab === 2 ? 'active' : '']">주문취소내역</a>
                  <a @click="activetab = 3" :class="[activetab === 3 ? 'active' : '']">반품처리내역</a>
                  <a @click="activetab = 4" :class="[activetab === 4 ? 'active' : '']">교환처리내역</a>
                </div>

                <div class="content">
                  <div v-if="activetab === 1" class="middelCtnt">
                    <div class="orderDiv">
                      <p>총 <strong>0</strong> 건</p>
                      <div class="orderTableDiv">
                        <table class="orderTable">
                          <thead>
                            <th style="width:120px;">주문일자</th>
                            <th>정기구독명</th>
                            <th style="width:120px;">결제금액</th>
                            <th style="width:120px;">주문번호</th>
                            <th style="width:120px;">주문상태</th>
                            <th style="width:120px;">발송예정일</th>
                            <th style="width:120px;">배송조회</th>
                            <th style="width:120px;">수취확인</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td colspan="8">현재 정기구독 주문내역이 없습니다.</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="orderText">
                        <p>※ 주문번호와 제품명을 클릭 하시면 주문 상세 내역을 보실 수 있습니다.</p>
                        <p>※ 배송정보는 처리현황이 배송 중, 배송완료 상태에서 조회가 가능합니다.</p>
                        <p>※ 이상없이 제품을 받으셨다면 수취확인을 해주세요. 확인하지 않으실 경우 배송시작일 부터 7일이후에 자동으로 배송완료상태로 변경됩니다.</p>
                        <p>※ 온라인에서 구매내역 표기시 제품의 정상가로 표기 됩니다. (단, 등급 반영시 실제 결제가 기준으로 반영됩니다.)</p>
                        <p>※ 등급 반영시 반품내역, 포인트 구매내역은 제외 됩니다.</p>
                      </div>
                      <div class="orderProcess">
                        <div class="icons icon1">
                          <span class="orderTitle">결제대기</span>
                        </div>
                        <div class="icons icon2">
                          <span class="orderTitle">결제완료</span>
                          <div class="orderTxt">
                            결제가 완료되어 관리자가 <br>
                            주문내역을 확인 중입니다 <br>
                            취소가 가능합니다
                          </div>
                        </div>
                        <div class="icons icon3">
                          <span class="orderTitle">제품준비중</span>
                          <div class="orderTxt">
                            결제 확인 후 택배사에서 <br>
                            제품을 포장하고 있습니다.
                          </div>
                        </div>
                        <div class="icons icon4">
                          <span class="orderTitle">배송중</span>
                          <div class="orderTxt">
                            제품을 포장 후 배송중입니다. <br>
                            송장번호를 통해 현 배송상태를 <br>
                            확인하실 수 있습니다.
                          </div>
                        </div>
                        <div class="icons icon5">
                          <span class="orderTitle">배송완료</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- 정기구독 신청내역 -->
                  <!-- 주문취소내역 -->
                  <div v-if="activetab === 2" class="middelCtnt">
                    <div class="orderDiv">
                      <p>총 <strong>0</strong> 건</p>
                      <div class="orderTableDiv">
                        <table class="orderTable">
                          <thead>
                            <th style="width:120px;">주문일자</th>
                            <th style="width:115px;">주문번호</th>
                            <th>정기구독명</th>
                            <th style="width:110px;">결제금액</th>
                            <th style="width:110px;">처리현황</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td colspan="5">현재 정기구독 주문취소 내역이 없습니다.</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="orderText">
                        <p>※ 주문번호나 제품명을 클릭 하시면 주문 상세 내역을 보실 수 있습니다.</p>
                        <p>※ 취소가 완료된 경우 취소완료로 상태가 표시됩니다.</p>
                      </div>
                      <div class="orderProcess">
                        <div class="icons icon6">
                          <span class="orderTitle">취소접수</span>
                          <div class="orderTxt">
                            취소일과 결제일의 해당 월이 <br>
                            다른 휴대폰결제와 가상계좌 <br>
                            결제인 경우 환불이 <br>
                            완료되기 전까지 <br>
                            취소접수로 표시 됩니다.
                          </div>
                        </div>
                        <div class="icons icon7">
                          <span class="orderTitle">취소완료</span>
                          <div class="orderTxt">
                            관리자가 취소 접수내역을 <br>
                            확인 후 환불해 드리고 <br>
                            취소 승인 시 <br>
                            취소 완료 상태가 됩니다.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- 정기구독 신청내역 -->
                  <!-- 반품처리내역 -->
                  <div v-if="activetab === 3" class="middelCtnt">
                    <div class="orderDiv">
                      <p>총 <strong>0</strong> 건</p>
                      <div class="orderTableDiv">
                        <table class="orderTable">
                          <thead>
                            <th style="width:120px;">주문일자</th>
                            <th style="width:115px;">반품번호</th>
                            <th>정기구독명</th>
                            <th style="width:110px;">결제금액</th>
                            <th style="width:110px;">처리현황</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td colspan="5">현재 정기구독 주문반품 내역이 없습니다.</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="orderText">
                        <p>※ 주문번호나 제품명을 클릭 하시면 주문 상세 내역을 보실 수 있습니다.</p>
                        <p>※ 취소가 완료된 경우 취소완료로 상태가 표시됩니다.</p>
                      </div>
                      <div class="orderProcess">
                        <div class="icons icon6">
                          <span class="orderTitle">반품접수</span>
                          <div class="orderTxt">
                            반품신청을 한 상태입니다.
                          </div>
                        </div>
                        <div class="icons icon8">
                          <span class="orderTitle">반품불가</span>
                          <div class="orderTxt">
                            반품 사유 분석 및 통화 후, <br>
                            반품 불가로 승인 날 경우 입니다.
                          </div>
                        </div>
                        <div class="icons icon4">
                          <span class="orderTitle">반품중</span>
                          <div class="orderTxt">
                            모든 결제방법 공통으로, <br>
                            반품승인 후 제품을 수령 해, <br>
                            올 때 까지의 단계 입니다.
                          </div>
                        </div>
                        <div class="icons icon9">
                          <span class="orderTitle">환불진행</span>
                          <div class="orderTxt">
                            무통장입금 결제의 경우만 <br>
                            존재하는 단계로 반품제품 수량 <br>
                            확인 후 관리자가 환불 <br>
                            계좌로 입금하는 단계입니다.
                          </div>
                        </div>
                        <div class="icons icon10">
                          <span class="orderTitle">반품완료</span>
                          <div class="orderTxt">
                            환불이 완료된 상태입니다. <br>
                            (입금확인에는 반품 완료 후 <br>
                            2,3일의 시간이 소요될 수 <br>
                            있습니다.)
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- 정기구독 신청내역 -->
                  <!-- 교환처리내역 -->
                  <div v-if="activetab === 4" class="middelCtnt">
                    <div class="orderDiv">
                      <p>총 <strong>0</strong> 건</p>
                      <div class="orderTableDiv">
                        <table class="orderTable">
                          <thead>
                            <th style="width:120px;">주문일자</th>
                            <th style="width:115px;">교환번호</th>
                            <th>정기구독명</th>
                            <th style="width:110px;">결제금액</th>
                            <th style="width:110px;">처리현황</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td colspan="5">현재 정기구독 주문교환 내역이 없습니다.</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="orderText">
                        <p>※ 씨드 내역 반영 시 씨드 쿠폰 발급, 등급산정에 대한 씨드 차감개수는 제외 됩니다.</p>
                      </div>
                      <div class="orderProcess">
                        <div class="icons icon6">
                          <span class="orderTitle">교환접수</span>
                          <div class="orderTxt">
                            교환을 신청하신 <br>
                            상태 입니다.
                          </div>
                        </div>
                        <div class="icons icon11">
                          <span class="orderTitle">교환불가</span>
                          <div class="orderTxt">
                            교환이 불가능한 제품인 경우 <br>
                            교환불가상태로 변경됩니다. <br>
                            상담은 고객센터를 <br>
                            이용해 주시기 바랍니다. <br>
                          </div>
                        </div>
                        <div class="icons icon12">
                          <span class="orderTitle">교환안내</span>
                          <div class="orderTxt">
                            반품하신 제품이 <br>
                            확인된 상태입니다. <br>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import myPageHeader from '@/layout/myPageHeader';
import myPageSide from '@/layout/myPageSide';
import searchDate from '@/layout/searchDate'

export default {
  name: '',
  components: { myPageHeader, myPageSide, searchDate },
  data() {
    return {
      activetab: 1
    };
  },
  methods: {
    tabs__toggle() {
      let contents = document.querySelectorAll(".tabs__content");
      let tabs = document.querySelectorAll(".tabs__toggle");

      tabs.forEach((tab, index) => {
        tab.addEventListener('click', () => {
          contents.forEach(content => {
            content.classList.remove('is-active');
          });
          tabs.forEach(tab => {
            tab.classList.remove('is-active');
          });
          contents[index].classList.add('is-active');
          tabs[index].classList.add('is-active');
        });
      });
    }
  },
};
</script>

<style scoped>












p {
  color: #777;
  padding: 3px;
}

h3 {
  font-size: 30px;
  font-weight: 600;
  /* padding-bottom: 20px; */
}

a {
  color: var(--text-black);
  font-style: none;
}

button {
  border: none;
}

.r_border {
  min-height: 1050px;
  border-left: 1px solid #ccc;
}

/* tabs */
.tabs__head {
  display: flex;
  align-items: stretch;
}

.tabs__toggle {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 14.28%;
  height: 64px;
  background: #fff;
  border: 1px solid #ccc;
  cursor: pointer;
}

.tabs__toggle.is-active {
  background: var(--bg-main);
  color: #fff;
  font-weight: 600;
}

.tabs__content {
  display: none;
}

.tabs__content.is-active {
  display: block;
}

/* header */

#container {
  width: 100vw;
  min-height: 500px;
  /* padding-bottom: 110px; */
  border-top: 1px solid transparent;
}

.btn_h {
  margin: 0 0 0 15px;
  padding-right: 25px;
  color: #777;
  background: url('@/assets/img/mypage/arw_loc_btn.png') no-repeat 99% 50%;
}

.dNone {
  display: none;
}

/* header category */

.location {
  display: flex;
  flex-direction: column;
}

.location:after {
  content: '';
  display: block;
  clear: both;
}

.location .list {
  display: none;
  position: absolute;
  max-height: 350px;
  overflow: hidden;
  top: 48px;
  left: -8px;
  padding: 18px 24px;
  background: #fff;
  border: 1px solid #a7a7a7;
}

.location .list a:hover {
  color: #222;
}

.headerCate {
  max-width: 1550px;
  margin: auto;
  justify-content: space-between;
  flex-wrap: nowrap;
}

.header {
  margin-left: 80px;
}

.contents {
  max-width: 1400px;
  margin: auto;
  justify-content: space-between;
  flex-wrap: nowrap;
}

.depth {
  float: left;
  margin-left: 10px;
  padding: 15px 0 17px;
  background: url('@/assets/img/mypage/arw_loc.png') no-repeat 0 50%;
}

.depth:last-child .btn_h {
  color: #222;
}

.depth:first-child .bt_h {
  color: #777;
}

.depth:first-child {
  background: none;
}

/* 중간 탭 */
.middleTabs {
  overflow: hidden;
  margin-bottom: -2px;
}

.middleTabs a {
  width: 25%;
  height: 48px;
  line-height: 47px;
  float: left;
  font-size: 18px;
  background-color: #f8f8f8;
  color: var(--bg-light-gray);
  text-align: center;
  cursor: pointer;
  transition: background-color 0.2s;
  border: 1px solid #dcdcdc;
  border-bottom: 1px solid;
}

.middleTabs ul {
  list-style-type: none;
  margin-left: 20px;
}

.middleTabs a:last-child {
  border-right: 1px solid #ccc;
}

.middleTabs a.active {
  background-color: #fff;
  color: #484848;
  border-color: #222;
  border-bottom: 2px solid #fff;
  cursor: default;
}

.middelCtnt {
  padding: 30px 0;
}

/* 전체주문결제내역 탭 */
.orderDiv p {
  margin-bottom: 14px;
  color: var(--text-black);
}

.orderTableDiv {
  position: relative;
  border-top: 2px solid var(--text-black);
}

.orderTable {
  width: 100%;
  border-collapse: collapse;
  table-layout: fixed;
}

.orderTable thead {
  vertical-align: middle;
}

.orderTable th,
td {
  padding: 17px 14px;
  text-align: center;
  color: var(--text-black);
  border-bottom: 1px solid var(--text-black);
  border-left: 1px solid #dcdcdc;
}

.orderTable td {
  border-bottom: 1px solid #dcdcdc;
}

.orderTable th:first-child,
.orderTable td:first-child {
  border-left: 0;
}

.orderTable th:last-child .orderTable td:last-child {
  border-right: 0;
}

.orderText {
  margin-top: 15px;
}

.orderText p {
  color: var(--text-light-gray);
  padding-left: 16px;
  margin-bottom: 0;
}

.orderProcess {
  margin-top: 80px;
  text-align: center;
}

.icons {
  position: relative;
  display: inline-block;
  width: 20%;
  font-size: 14px;
  line-height: 1.4;
  vertical-align: top;
}

.icons::before {
  content: '';
  display: block;
  height: 60px;
  margin-bottom: 10px;
}

.icons+.icons::after {
  content: '';
  position: absolute;
  top: 80px;
  left: 0;
  width: 11px;
  height: 19px;
  background: url("@/assets/img/mypage/arw_process.png") no-repeat;
}

.icon1::before {
  background: url("@/assets/img/mypage/icon_process1.png") no-repeat 50% 50%;
}

.icon2::before {
  background: url("@/assets/img/mypage/icon_process2.png") no-repeat 50% 50%;
}

.icon3::before {
  background: url("@/assets/img/mypage/icon_process3.png") no-repeat 50% 50%;
}

.icon4::before {
  background: url("@/assets/img/mypage/icon_process4.png") no-repeat 50% 50%;
}

.icon5::before {
  background: url("@/assets/img/mypage/icon_process5.png") no-repeat 50% 50%;
}

.icon6::before {
  background: url("@/assets/img/mypage/icon_process6.png") no-repeat 50% 50%;
}

.icon7::before {
  background: url("@/assets/img/mypage/icon_process7.png") no-repeat 50% 50%;
}

.icon8::before {
  background: url("@/assets/img/mypage/icon_process8.png") no-repeat 50% 50%;
}

.icon9::before {
  background: url("@/assets/img/mypage/icon_process9.png") no-repeat 50% 50%;
}

.icon10::before {
  background: url("@/assets/img/mypage/icon_process10.png") no-repeat 50% 50%;
}

.icon11::before {
  background: url("@/assets/img/mypage/icon_process11.png") no-repeat 50% 50%;
}

.icon12::before {
  background: url("@/assets/img/mypage/icon_process12.png") no-repeat 50% 50%;
}

.orderTitle {
  display: block;
  margin-bottom: 15px;
  font-size: 24px;
  line-height: 1.5;
  color: var(--text-black);
}

.orderTxt {
  color: var(--text-light-gray);
}

/* 취소신청 탭 */
.SubTitle {
  margin: 75px 0 24px;
  font-size: 22px;
}

.cancelDiv {
  padding-top: 16px;
  border-top: 2px solid var(--text-black);
}

.cancelDiv p {
  margin-top: 5px;
  color: var(--text-light-gray);
}

.cancelDiv div~div {
  margin-top: 36px;
}

/* 증빙서류발급 탭 */
.receiptTable {
  width: 100%;
  border-collapse: collapse;
  border: 0;
  table-layout: fixed;
}

.receiptTable thead {
  vertical-align: middle;
}

.receiptTable thead th {
  border-bottom: 1px solid var(--text-black);
}

.receiptTable th,
.receiptTable td {
  padding: 17px 14px;
  border-bottom: 1px solid #dcdcdc;
  border-left: 1px solid #dcdcdc;
  text-align: center;
  color: #222;
}

.receiptTable th:first-child,
.receiptTable td:first-child {
  border-left: 0;
}
</style>
