<template>
  <nav id="snb" class="col-2">
		<div class="inner">
			<ul class="navList">
				<li><div>주문/배송현황</div></li>
				<li><div>찜한 제품</div></li>
				<li><div>내 리뷰</div></li>
				<li><div>회원정보 수정</div></li>
			</ul>
		</div>
	</nav>
</template>

<script>
export default {

}
</script>

<style scoped>

	#snb{
		display: flex;
		flex-direction: column;
		align-items: flex-start;
		min-width: 213px;
		border-right: 0.5px solid #ccc;
		height: 100vh;
		position: sticky;
	}
	.inner{
		padding-left: 50px;
	}
	.navList{
		display: flex;
		flex-direction: column;
		gap: 40px;
		padding: 40px;
	}
</style>